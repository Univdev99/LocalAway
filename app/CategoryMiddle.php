<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryMiddle extends Model
{
    protected $fillable = ["product_id", "subcat_id"];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }


}
