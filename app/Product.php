<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        "type",
        "product_id",
        "availability",
        "brand",
        "colour",
        "condition",
        "converted_currency",
        "converted_retailer_price",
        "converted_sale_price",
        "currency",
        "e_affiliate_url",
        "e_brand_formatted",
        "e_cat_l1",
        "e_cat_l2",
        "e_categories",
        "e_categories_path",
        "e_colour",
        "e_country",
        "e_delivery_options",
        "e_free_returns",
        "e_free_shipping_currency",
        "e_free_shipping_over",
        "e_friendly_id",
        "e_friendly_ids",
        "e_gender",
        "e_gender_list",
        "e_image_urls_detail_jpg",
        "e_image_urls_detail_ratio",
        "e_image_urls_detail_webp",
        "e_image_urls_og",
        "e_image_urls_search_jpg",
        "e_image_urls_search_webp",
        "e_is_free_shipping",
        "e_item_code",
        "e_material",
        "e_payment_options",
        "e_price_USD",
        "e_retailer_display_domain",
        "e_retailer_display_name",
        "e_retailer_facet_name",
        "e_retailer_name",
        "e_returns_link",
        "e_returns_period",
        "e_shipping_carrier",
        "e_shipping_link",
        "e_subcat",
        "gender",
        "hreflang",
        "item_code",
        "long_description",
        "material",
        "product_name",
        "retailer_price",
        "retailer_url",
        "sku_code",
        "updated_at",
        "updated_at_yday",
        "updated_at_year",
        "updated_at_yweek",
        "external",
        "self",
        "selfRelative",
    ];

    // public function productCategories()
    // {
    //     return $this->haMany()
    // }
}