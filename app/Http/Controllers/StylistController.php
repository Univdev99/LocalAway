<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Upload;
use App\Stylist;
use App\User;
use Hash;

class StylistController extends Controller
{
    public function index(Request $request)
    {
        $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();
        return view('stylist.index', [
          'logo' => $logo
        ]);
    }

    public function checkEmailDuplicate(Request $request)
    {
        $email = $request->input('email');
        if (is_null(User::where('email', $email)->first())) {
            return 'ok';
        } else {
            return 'duplicated';
        }
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required:max:255',
        // ]);

        // auth()->user()->files()->create([
        //     'title' => $request->get('qqfilename'),
        // ]);

        $duplicated = User::where('email', $request->get('stylist-email'))->first();
        if ($duplicated) {
            return response('duplicated email', 400);
        }

        $stylist_type = $request->get('stylist-type');
        $hours = $request->get('hours');
        $linkedin = $request->get('linkedin');

        if  ($stylist_type=="boutique"){
            $location = $request->get('boutique_location');
            $stylist_name = $request->get('boutique-name');
            $stylist_email = $request->get('boutique-email');
            $letter = $request->get('boutique-letter');
            $link1 = $request->get('boutique-link1');
            $link2 = $request->get('boutique-link2');
            $link3 = $request->get('boutique-link3');
            $resume = $request->file('boutique-resume');
        }else{
            // if($request->get('stylist_location')=="other"){
                $location = $request->get('other_location');
            // }else{
            //     $location = $request->get('stylist_location');
            // }
            $stylist_name = $request->get('stylist-name');
            $stylist_email = $request->get('stylist-email');
            $letter = $request->get('stylist-letter');
            $link1 = $request->get('stylist-link1');
            $link2 = $request->get('stylist-link2');
            $link3 = $request->get('stylist-link3');
            $resume = $request->file('stylist-resume');
        }
        if($resume!=null){
            $filename = time().$resume->getClientOriginalName();
            Storage::disk('public')->putFileAs('uploads/resume', $resume, $filename);
            $stylist->resume = $filename;
        }
        
        $user = new User;
        $user->user_type = 'stylist';
        $names = explode(' ', $stylist_name);
        if (count($names) > 0) {
            $user->first_name = $names[0];
            $user->last_name = '';
        }
        if (count($names) > 1) {
            $user->last_name = $names[1];
        }
        $user->birthday = '';
        $user->phone_number = '';
        $user->email = $stylist_email;
        $user->password = Hash::make($request->get('password'));
        $user->save();

        $stylist = new Stylist;
        $stylist->stylist_type = $stylist_type;
        $stylist->location = $location;
        $stylist->work_hour = $hours;
        $stylist->stylist_name = $stylist_name;
        $stylist->stylist_email = $stylist_email;
        $stylist->coverletter = $letter;
        $stylist->linkedin = $linkedin;
        $stylist->relevant_link1 = $link1;
        $stylist->relevant_link2 = $link2;
        $stylist->relevant_link3 = $link3;

        $stylist->user_id = $user->id;
        $stylist->save();
        
        return redirect()->route('stylist.thankyou');
    }

    public function delete(Request $request, $id)
    {
        $collection = $request->get('collection');
        $upload = Upload::find($id);
        $upload->delete();
        Storage::disk('public')->delete('/uploads/' . $upload->filename);
        return redirect('/dashboard/'.$collection.'-image');
    }
    
    public function update(Request $request, $id)
    {
        $collection = $request->get('collection');
        $update = Upload::find($id);
        $update->title = $request->get('title');
        $update->save();
        // $upload->delete();
        // Storage::disk('public')->delete('/uploads/' . $upload->filename);
        return redirect('/dashboard/'.$collection.'-image');
    }

    public function use(Request $request, $id)
    {
        $collection = $request->get('collection');
        if($collection == "logo"||$collection == "hero"){
            $update = Upload::where('collection',$collection)->where('extra',1)->update(['extra' => 0]);
        }
        $update = Upload::find($id);
        $update->extra = 1;
        $update->save();
        // $upload->delete();
        // Storage::disk('public')->delete('/uploads/' . $upload->filename);
        return redirect('/dashboard/'.$collection.'-image');
    }

    public function up(Request $request, $id)
    {
        $collection = $request->get('collection');
        $update = Upload::find($id);
        $extra = $update->extra;
        $max = Upload::where('collection',$collection)->where('extra', '<', $extra)->max('extra');
        $exchange = Upload::where('extra', $max)->where('collection',$collection)->first();
        $exchange->extra = $extra;
        $update->extra = $max;
        $update->save();
        $exchange->save();
        // $upload->delete();
        // Storage::disk('public')->delete('/uploads/' . $upload->filename);
        return redirect('/dashboard/'.$collection.'-image');
    }

    public function down(Request $request, $id)
    {
        $collection = $request->get('collection');
        $update = Upload::find($id);
        $extra = $update->extra;
        $min = Upload::where('collection',$collection)->where('extra', '>', $extra)->min('extra');
        $exchange = Upload::where('extra', $min)->where('collection',$collection)->first();
        $exchange->extra = $extra;
        $update->extra = $min;
        $update->save();
        $exchange->save();
        // $upload->delete();
        // Storage::disk('public')->delete('/uploads/' . $upload->filename);
        return redirect('/dashboard/'.$collection.'-image');
    }

    public function thankyou(Request $request)
    {
        return view('stylist-thankyou');
    }
}