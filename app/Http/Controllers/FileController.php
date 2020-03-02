<?php
namespace App\Http\Controllers;

use App\CategoryMiddle;
use App\Maincategory;
use App\Materialcategory;
use App\Product;
use App\Subcategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Upload;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

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
        // $filename = time().$uploadedFile->getClientOriginalName();
        $filename = time().'.'.$uploadedFile->getClientOriginalExtension();
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

    public function vcUpload(Request $request)
    {
        $file = $request->file('product');
        $extension = $file->getClientOriginalExtension();

        if($extension == "json"){
            $this->jsonParsing($file);
        }
        return redirect("/dashboard/virtual-closet");
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


    public function jsonParsing($file)
    {
        $contents = file_get_contents($file->getRealPath());
        $json = json_decode($contents, true);

        $db_array = [];
        // $start = microtime(TRUE);
        set_time_limit(4000);
        $cnt = 0;
        foreach($json as $json_index)
        {
            if (Product::where('product_id', $json_index["id"])->count() > 0){
                continue;
            }
            foreach ($json_index as $product => $attr){
                if($product == "id"){
                    $id = $attr;
                    continue;
                }else if (is_array($attr)){
                    foreach ($attr as $index => $content){
                        $str = $content;
                        if (is_array($content)){
                            $isArrayofArray = empty(array_filter($content, function ($item){
                                return !is_array($item);
                            }) );
                            if($isArrayofArray){
                                $str = json_encode($content);
                            }else{
                                $str = implode(",", $content);
                            }
                            foreach ($content as $category){
                                if ($index == "e_cat_l1"){
                                    $maincat = Maincategory::updateOrCreate(['name' => $category]);
                                }else if($index == "e_cat_l2"){
                                    $catname = substr($category, strpos($category,'-',0)+1);
                                    if (isset($maincat)){
                                        Subcategory::updateOrCreate(['name' => $catname],['maincategory_id' => $maincat->id]);
                                    }else{
                                        Subcategory::updateOrCreate(['name' => $catname]);
                                    }
                                }else{
                                    break;
                                }
                            }
                        }else{
                            if($index == "updated_at"){
                                $date = date_create($content);
                                $str = $date;
                            }
                        }

                        $db_array = array_merge($db_array, [$index => $str]);
                    }
                }else{
                    $db_array = array_merge($db_array, [$product => $attr]);
                }
            }
            // dd($db_array);
            try {
                $product_column = Product::updateOrCreate([ 'product_id' => $id],$db_array);
            }

              //catch exception
            catch(Exception $e) {
                continue;
            }


            if(isset($json_index["attributes"]["e_cat_l2"])){
                if($json_index["attributes"]["e_cat_l2"] != null){
                    foreach ($json_index["attributes"]["e_cat_l2"] as $sub_category){
                        $catnam = substr($sub_category, strpos($sub_category,'-',0) + 1);
                        $sub_cat = Subcategory::where('name', $catnam)->first();
                        CategoryMiddle::updateOrCreate(["product_id" => $product_column->id, "subcat_id" => $sub_cat->id]);
                    }
                }
            }

            if(isset($json_index["attributes"]["e_categories"])){
                if($json_index["attributes"]["e_categories"] !=null){
                    foreach ($json_index["attributes"]["e_categories"] as $material_category){
                        Materialcategory::updateOrCreate(["product_id" => $product_column->id, "name" => $material_category]);
                    }
                }
            }
            $cnt += 1;
        }

        // $end = microtime(TRUE);
        // dd("The code took " . ($end - $start) . " seconds to complete.");
    }

    public function phpinfo()
    {
        dd(phpinfo());
    }
}
