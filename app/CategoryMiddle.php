<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryMiddle extends Model
{
    protected $fillable = ["product_id", "subcat_id"];
}
