<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Upload;

class FileController extends Controller
{
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required:max:255',
        // ]);

        // auth()->user()->files()->create([
        //     'title' => $request->get('qqfilename'),
        // ]);

        $collection = $request->get('collection');
        $title = $request->get('title');

        $uploadedFile = $request->file('image');
        $filename = time().$uploadedFile->getClientOriginalName();
        Storage::disk('public')->putFileAs('uploads', $uploadedFile, $filename);
        $max = Upload::where('collection',$collection)->max('extra');
        if (is_null($max)){
            $max = 0;
        }
        if(($max == 1) && ($collection == "logo" || $collection == "hero")){
            $max = -1;
        }
        $upload = new Upload;
        $upload->filename = $filename;
        $upload->collection = $collection;
        $upload->title = $title;
        $upload->extra = $max + 1;
        // $upload->user()->associate(auth()->user());

        $upload->save();
            return redirect('/dashboard/'.$collection.'-image');
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
}