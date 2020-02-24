<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreateVclosetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vclosets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("type")->nullable();
            $table->string("product_id");
            $table->string("availability")->nullable();
            $table->string("brand")->nullable();
            $table->string("colour")->nullable();
            $table->string("condition")->nullable();
            $table->string("converted_currency")->nullable();
            $table->string("converted_retailer_price")->nullable();
            $table->string("converted_sale_price")->nullable();
            $table->string("currency")->nullable();
            $table->string("e_brand_formatted")->nullable();
            $table->string("e_cat_l1")->nullable();
            $table->string("e_cat_l2")->nullable();
            $table->string("e_categories")->nullable();
            $table->string("e_categories_path")->nullable();
            $table->string("e_colour")->nullable();
            $table->string("e_country")->nullable();
            $table->string("e_delivery_options")->nullable();
            $table->boolean("e_free_returns")->nullable();
            $table->string("e_free_shipping_currency")->nullable();
            $table->string("e_free_shipping_over")->nullable();
            $table->string("e_friendly_id")->nullable();
            $table->string("e_friendly_ids")->nullable();
            $table->string("e_gender")->nullable();
            $table->string("e_gender_list")->nullable();
            $table->string("e_image_urls_detail_jpg")->nullable();
            $table->string("e_image_urls_detail_ratio")->nullable();
            $table->string("e_image_urls_detail_webp")->nullable();
            $table->string("e_image_urls_og")->nullable();
            $table->string("e_image_urls_search_jpg")->nullable();
            $table->string("e_image_urls_search_webp")->nullable();
            $table->boolean("e_is_free_shipping")->nullable();
            $table->string("e_item_code")->nullable();
            $table->string("e_material")->nullable();
            $table->string("e_payment_options")->nullable();
            $table->string("e_price_USD")->nullable();
            $table->string("e_retailer_display_domain")->nullable();
            $table->string("e_retailer_display_name")->nullable();
            $table->string("e_retailer_facet_name")->nullable();
            $table->string("e_retailer_name")->nullable();
            $table->string("e_returns_link")->nullable();
            $table->integer("e_returns_period")->nullable();
            $table->string("e_shipping_carrier")->nullable();
            $table->string("e_shipping_link")->nullable();
            $table->string("e_subcat")->nullable();
            $table->string("gender")->nullable();
            $table->string("hreflang")->nullable();
            $table->string("item_code")->nullable();
            $table->longText("long_description")->nullable();
            $table->string("material")->nullable();
            $table->string("product_name")->nullable();
            $table->string("retailer_price")->nullable();
            $table->string("retailer_url")->nullable();
            $table->string("sku_code")->nullable();
            $table->timestamp("updated_time")->nullable();
            $table->string("external")->nullable();
            $table->string("self")->nullable();
            $table->string("selfRelative")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vclosets');
    }
}
