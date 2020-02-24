<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Upload;
use App\Vcloset;

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
        if($extension != 'json' || $extension != 'csv'){
            return redirect('/dashboard/virtual-closet');
        }
        else if($extension == 'json'){
            $json = json_decode($file, true);
            foreach($json as $product)
            {

                // $attr = 'e_cat_l1';
                // foreach($product->attributes->$attr as $index){
                //     // $e_cat_li
                // }
                Vcloset::updateOrCreate([ 'product_id' => $product->id],[
                    "type" => $product->type,
                    "availability" => $product->attributes->availability,
                    "brand" => $product->attributes->brand,
                    "colour" => $product->attributes->colour,
                    "condition" => $product->attributes->condition,
                    "converted_currency" => $product->attributes->converted_currency,
                    "converted_retailer_price" => $product->attributes->converted_retailer_price,
                    "converted_sale_price" => $product->attributes->converted_sale_price,
                    "currency" => $product->attributes->currency,
                    "e_affiliate_url" => $product->attributes->e_affiliate_url,
                    "e_brand_formatted" => $product->attributes->e_brand_formatted,
                    "e_cat_l1" => $product->attributes->e_cat_l1,
                    "e_cat_l2" => $product->attributes->e_cat_l2,
                    "e_categories" => $product->attributes->e_categories,
                    "e_categories_path" => $product->attributes->e_categories_path,
                    "e_colour" => $product->attributes->e_colour,
                    "e_country" => $product->attributes->e_country,
                    "e_delivery_options" => $product->attributes->e_delivery_options,
                    "e_free_returns" => $product->attributes->e_free_returns,
                    "e_free_shipping_currency" => $product->attributes->e_free_shipping_currency,
                    "e_free_shipping_over" => $product->attributes->e_free_shipping_over,
                    "e_friendly_id" => $product->attributes->e_friendly_id,
                    "e_friendly_ids" => $product->attributes->e_friendly_ids,
                    "e_gender" => $product->attributes->e_gender,
                    "e_gender_list" => $product->attributes->e_gender_list,
                    "e_image_urls_detail_jpg" => $product->attributes->e_image_urls_detail_jpg,
                    "e_image_urls_detail_ratio" => $product->attributes->e_image_urls_detail_ratio,
                    "e_image_urls_detail_webp" => $product->attributes->e_image_urls_detail_webp,
                    "e_image_urls_og" => $product->attributes->e_image_urls_og,
                    "e_image_urls_search_jpg" => $product->attributes->e_image_urls_search_jpg,
                    "e_image_urls_search_webp" => $product->attributes->e_image_urls_search_webp,
                    "e_is_free_shipping" => $product->attributes->e_is_free_shipping,
                    "e_item_code" => $product->attributes->e_item_code,
                    "e_material" => $product->attributes->e_material,
                    "e_payment_options" => $product->attributes->e_payment_options,
                    "e_price_USD" => $product->attributes->e_price_USD,
                    "e_retailer_display_domain" => $product->attributes->e_retailer_display_domain,
                    "e_retailer_display_name" => $product->attributes->e_retailer_display_name,
                    "e_retailer_facet_name" => $product->attributes->e_retailer_facet_name,
                    "e_retailer_name" => $product->attributes->e_retailer_name,
                    "e_returns_link" => $product->attributes->e_returns_link,
                    "e_returns_period" => $product->attributes->e_returns_period,
                    "e_shipping_carrier" => $product->attributes->e_shipping_carrier,
                    "e_shipping_link" => $product->attributes->e_shipping_link,
                    "e_subcat" => $product->attributes->e_subcat,
                    "gender" => $product->attributes->gender,
                    "hreflang" => $product->attributes->hreflang,
                    "item_code" => $product->attributes->item_code,
                    "long_description" => $product->attributes->long_description,
                    "material" => $product->attributes->material,
                    "product_name" => $product->attributes->product_name,
                    "retailer_price" => $product->attributes->retailer_price,
                    "retailer_url" => $product->attributes->retailer_url,
                    "sku_code" => $product->attributes->sku_code,
                    "dated_at" => $product->attributes->dated_at,
                    "external" => $product->links->external,
                    "self" => $product->links->self,
                    "selfRelative" => $product->links->selfRelative
                ]);
            }
        }
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
