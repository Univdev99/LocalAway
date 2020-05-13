<?php
namespace App\Http\Controllers;

use App\CategoryMiddle;
use App\Mail\sendBoutiquePasswordMail;
use App\Product;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Upload;
use App\Stylist;
use App\Subcategory;
use App\Survey_person;
use Stevebauman\Location\Location;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class StylistController extends Controller
{
    public $email;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $user = \Auth::user();
            if ($user) {
                $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();
                View::share('logo', $logo);
            }
            return $next($request);
        });
    }

    public function signup(Request $request)
    {
        $location = new Location();
        $position = $location->get($request->ip());
        if ($position) {
            $location = $position->countryName.", ".$position->cityName;
        } else {
            $location = 'Undefined Country';
        }

        return view('com.stylist.stylist-sign-in', ['location' => $location]);
    }

    public function index(Request $request)
    {

        return view('com.stylist.sections.index');
    }

    public function profile(Request $request)
    {
        $stylist = Stylist::where('user_id', $request->user()->id)->first();
        return view('com.stylist.sections.profile', [
            'name'=> $stylist->stylist_name,
            'link1' => $stylist->relevant_link1,
            'link2' => $stylist->relevant_link2,
            'link3' => $stylist->relevant_link3,
            'notes' => $stylist->notes
            ]);
    }

    public function clients(Request $request)
    {

        return view('com.stylist.sections.clients');
    }

    public function shop(Request $request)
    {
        $stylist = Stylist::where('user_id', auth()->user()->id)->first();
        if(!$stylist){
            return;
        }
        $filter = $request->input('filter');
        $stylist = Stylist::where('user_id', auth()->user()->id)->first();
        if(!$stylist){
            return;
        }
        $products = [];
        if($filter == null){
            $products = Product::where('boutique_id', $stylist->id)->paginate(15);
        }else{
            $middle = CategoryMiddle::whereIn('subcat_id', $filter)->with('product')->where('boutique_id', $stylist->id)->paginate(15);

            foreach ($middle as $index ) {
                array_push($products, $index->product);
            }
        }

        if ($request->ajax()) {
            $view = view('com.stylist.sections.products', [
                'filter' => Subcategory::all(),
                'products' => $products, 
                'homepage' => $stylist->homepage,
                'bio' => $stylist->bio,
                'boutique_logo' => $stylist->logo
                ])->render();
            return response()->json(['html'=>$view]);
        }
        return view('com.stylist.sections.shop', [
            'filter' => Subcategory::all(), 
            'products' => [],
            'homepage' => $stylist->homepage,
            'bio' => $stylist->bio,
            'boutique_logo' => $stylist->logo
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
        $email = $request->input('email');
        if (!(User::where(['email'=>$email, 'user_type'=>'customer'])->first() && !User::where(['email'=>$email, 'user_type'=>'stylist'])->first())){
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
            ]);
        }

        $user = new User;
        $user->user_type = 'stylist';
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->birthday = '';
        $user->phone_number = $request->input('phone');
        $user->email = $email;
        // $pwd = $request->input('password');
        // $user->password = Hash::make($pwd);
        $user->save();

        $stylist = new Stylist;
        $stylist->stylist_type = "boutique";
        $stylist->location = $request->input('location');
        $stylist->work_hour = $request->input('hours');
        $stylist->stylist_name = $request->input('name');
        $stylist->notes = $request->input('notes');
        $stylist->relevant_link1 = $request->input('link1');
        $stylist->relevant_link2 = $request->input('link2');
        $stylist->relevant_link3 = $request->input('link3');

        // if($resume!=null){
        //     $filename = time().$resume->getClientOriginalName();
        //     Storage::disk('public')->putFileAs('uploads/resume', $resume, $filename);
        //     $stylist->resume = $filename;
        // }

        $stylist->user_id = $user->id;
        $stylist->save();
        return redirect()->route('com.stylist.thankyou');
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

    public function thankyou()
    {
        return view('com.stylist.stylist-thankyou');
    }

    public function setpwd(Request $request)
    {
        $expire = $request->input('expires');
        $token = $request->input('token');
        $json = json_decode(Crypt::decrypt($token));

        // $person = Survey_person::where(['email' => $json->email, 'name' => $json->name])->get();
        // if($expire < time() || count($person) != 1){
        //     return view('ai.mailSent');
        // }
    }

    public function boutiqueActive(Request $request)
    {
        $stylist = User::where('email', $request->email)->first()->stylist;
        $stylist->status = 0;
        $stylist->save();
        return "Set Inactive";
    }

    public function boutiqueInActive(Request $request)
    {
        $survey_person = Survey_person::where('email', $request->email)->first();

        $user = User::where('email', $request->email)->first();
        $token = Password::broker()->createToken($user);
        $url = url(config('app.url').route('password.reset', ['token' => $token, 'email' => $user->email], false));

        $stylist = $user->stylist;
        $stylist->status = 1;
        $stylist->save();

        
        Mail::to($request->email)->send(new sendBoutiquePasswordMail($user->first_name, $user->email, $survey_person->access_code, $url));
        return "Set active";
    }
}
