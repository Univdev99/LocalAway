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
            $table->string("type", 255)->nullable();
            $table->string("product_id", 255);
            $table->string("availability", 255)->nullable();
            $table->string("brand", 255)->nullable();
            $table->string("colour", 255)->nullable();
            $table->string("condition", 255)->nullable();
            $table->string("converted_currency", 255)->nullable();
            $table->string("converted_retailer_price", 255)->nullable();
            $table->string("converted_sale_price", 255)->nullable();
            $table->string("currency", 255)->nullable();
            $table->longText("e_affiliate_url")->nullable();
            $table->string("e_brand_formatted", 255)->nullable();
            $table->string("e_cat_l1", 255)->nullable();
            $table->string("e_cat_l2", 255)->nullable();
            $table->string("e_categories", 255)->nullable();
            $table->longText("e_categories_path")->nullable();
            $table->string("e_colour", 255)->nullable();
            $table->string("e_country", 255)->nullable();
            $table->string("e_delivery_options", 255)->nullable();
            $table->boolean("e_free_returns")->nullable();
            $table->string("e_free_shipping_currency", 255)->nullable();
            $table->string("e_free_shipping_over", 255)->nullable();
            $table->longText("e_friendly_id")->nullable();
            $table->longText("e_friendly_ids")->nullable();
            $table->string("e_gender", 255)->nullable();
            $table->string("e_gender_list", 255)->nullable();
            $table->longText("e_image_urls_detail_jpg")->nullable();
            $table->string("e_image_urls_detail_ratio", 255)->nullable();
            $table->longText("e_image_urls_detail_webp")->nullable();
            $table->string("e_image_urls_og", 255)->nullable();
            $table->longText("e_image_urls_search_jpg")->nullable();
            $table->longText("e_image_urls_search_webp")->nullable();
            $table->boolean("e_is_free_shipping")->nullable();
            $table->string("e_item_code", 255)->nullable();
            $table->string("e_material", 255)->nullable();
            $table->string("e_payment_options", 255)->nullable();
            $table->string("e_price_USD", 255)->nullable();
            $table->string("e_retailer_display_domain", 255)->nullable();
            $table->string("e_retailer_display_name", 255)->nullable();
            $table->string("e_retailer_facet_name", 255)->nullable();
            $table->string("e_retailer_name", 255)->nullable();
            $table->string("e_returns_link", 255)->nullable();
            $table->integer("e_returns_period")->nullable();
            $table->string("e_shipping_carrier", 255)->nullable();
            $table->string("e_shipping_link", 255)->nullable();
            $table->string("e_subcat", 255)->nullable();
            $table->string("gender", 255)->nullable();
            $table->string("hreflang", 255)->nullable();
            $table->string("item_code", 255)->nullable();
            $table->longText("long_description")->nullable();
            $table->string("material", 255)->nullable();
            $table->string("product_name", 255)->nullable();
            $table->string("retailer_price", 255)->nullable();
            $table->string("retailer_url", 255)->nullable();
            $table->string("sku_code", 255)->nullable();
            $table->timestamp("updated_at")->nullable();
            $table->string("updated_at_yday")->nullable();
            $table->string("updated_at_year")->nullable();
            $table->string("updated_at_yweek")->nullable();
            $table->string("external", 255)->nullable();
            $table->string("self", 255)->nullable();
            $table->string("selfRelative", 255)->nullable();


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
