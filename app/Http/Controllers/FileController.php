<?php
namespace App\Http\Controllers;

use App\CategoryMiddle;
use App\Maincategory;
use App\Materialcategory;
use App\Product;
use App\Stylist;
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
        $collection = $request->get('collection');
        $title = $request->get('title');

        $uploadedFile = $request->file('image');
        $ext = $uploadedFile->getClientOriginalExtension();
        $filename = time().'.'.$ext;

        $uploadedFile = $this->resize_image($uploadedFile);
        // switch ($collection) {
        //     case 'hero':
        //         $uploadedFile = $this->resize_image($uploadedFile, 1920, 1080);
        //         break;
        //     case 'itinerary':
        //         $uploadedFile = $this->resize_image($uploadedFile, 1280, 800);
        //         break;
        //     case 'logo':
        //         $uploadedFile = $this->resize_image($uploadedFile, 280, 60);
        //     default:
        //         # code...
        //         break;
        // }

        $compressed_file = $this->compress($uploadedFile, 'storage/uploads/'.$filename, 70, $ext);
        // Storage::disk('public')->putFileAs('uploads', $uploadedFile, $filename);
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
        return redirect()->route('com.stylist.shop');
    }

    public function upload(Request $request)
    {
        $type = $request->input('upload-type');
        if($type == "csv"){
            $this->vcUpload($request);
            return redirect()->route('com.stylist.shop');
        }
        $uploadedFile = $request->file('product');
        $ext = $uploadedFile->getClientOriginalExtension();
        $filename = time().'.'.$ext;

        $uploadedFile = $this->resize_image($uploadedFile);

        $compressed_file = $this->compress($uploadedFile, 'storage/uploads/'.$filename, 70, $ext);
        $stylist = Stylist::where('user_id', auth()->user()->id)->first();
        switch ($type) {
            case 'homepage':
                $stylist->homepage = $filename;
                break;
            case 'bio':
                $stylist->bio = $filename;
                break;
            case 'logo':
                $stylist->logo = $filename;
                break;
            default:
                break;
        }
        $stylist->save();
        return redirect()->route('com.stylist.shop');
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
        if ($collection == 'itinerary') {
            $update->description = $request->get('description');
        }
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
            $stylist = Stylist::where('user_id', auth()->user()->id)->first();
            try {
                $db_array = array_merge($db_array, ['boutique_id'=> $stylist->id]);
                $product_column = Product::updateOrCreate([ 'product_id' => $id], $db_array);
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

    /**
     * Resize image given a height and width and return raw image data.
     *
     * Note : You can add more supported image formats adding more parameters to the switch statement.
     *
     * @param type $file filepath
     * @param type $w width in px
     * @param type $h height in px
     * @param type $crop Crop or not
     * @return type
     */
    function resize_image($file, $w=0, $h=0, $crop=false) {
        // if($w!=0&&$h!=0){
        //     list($width, $height) = getimagesize($file);
        //     $r = $width / $height;
        //     if ($crop) {
        //         if ($width > $height) {
        //             $width = ceil($width-($width*abs($r-$w/$h)));
        //         } else {
        //             $height = ceil($height-($height*abs($r-$w/$h)));
        //         }
        //         $newwidth = $w;
        //         $newheight = $h;
        //     } else {
        //         if ($w/$h > $r) {
        //             $newwidth = $h*$r;
        //             $newheight = $h;
        //         } else {
        //             $newheight = $w/$r;
        //             $newwidth = $w;
        //         }
        //     }
        // }

        //Get file extension
        $ext = $file->getClientOriginalExtension();

        switch($ext){
            case "png":
                $src = imagecreatefrompng($file);
            break;
            case "jpeg":
            case "jpg":
                $src = imagecreatefromjpeg($file);
            break;
            case "gif":
                $src = imagecreatefromgif($file);
            break;
            default:
                $src = imagecreatefromjpeg($file);
            break;
        }

        $dst = imagescale($src, $w, $h);

        // $dst = imagecreatetruecolor($newwidth, $newheight);
        // imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        if($w == 0 && $h==0){
            return $src;
        }
        return $dst;
    }

    /**
     * Decrease or increase the quality of an image without resize it.
     *
     * @param type $source
     * @param type $destination
     * @param type $quality
     * @return type
     */
    function compress($source, $destination, $quality, $ext) {
        //Get file extension
        // switch($ext){
        //     case "png":
        //         $src = imagecreatefrompng($source);
        //     break;
        //     case "jpeg":
        //     case "jpg":
        //         $src = imagecreatefromjpeg($source);
        //     break;
        //     case "gif":
        //         $src = imagecreatefromgif($source);
        //     break;
        //     default:
        //         $src = imagecreatefromjpeg($source);
        //     break;
        // }

        switch($ext){
            case "png":
                imagepng($source, $destination, (int)$quality/10);
            break;
            case "jpeg":
            case "jpg":
                imagejpeg($source, $destination, $quality);
            break;
            case "gif":
                imagegif($source, $destination, $quality);
            break;
            default:
                imagejpeg($source, $destination, $quality);
            break;
        }

        return $destination;
    }

    // public function get_instagram($username)
    // {
    //     $profileUrl = "https://www.instagram.com/$username/?__a=1";

    //     $iterationUrl = $profileUrl;
    //     $tryNext = true;
    //     $limit = 100;
    //     $found = 0;
    //     while ($tryNext) {
    //         $tryNext = false;
    //         $response = file_get_contents($iterationUrl);
    //         if ($response === false) {
    //             break;
    //         }
    //         $data = json_decode($response, true);
    //         if ($data === null) {
    //             break;
    //         }
    //         $media = $data['graphql']['user']['edge_owner_to_timeline_media'];
    //         $found += count($media['edges']);
    //         dump($media['edges']);
    //         if ($media['page_info']['has_next_page'] && $found < $limit) {
    //             $iterationUrl = $profileUrl . '&max_id=' . $media['page_info']['end_cursor'];
    //             $tryNext = true;
    //         }
    //     }
    //     dd("End");
    // }

    public function phpinfo()
    {
        // $username = "benwu@localaway.com";
        // $t = md5($username);
        // dd($t);
        return view('email.sendaccess',[
            'name' => "Julia",
            'access_code' => 482954
        ]);

    }
}
