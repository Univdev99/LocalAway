<?php

namespace App;

use App\Customer;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'order_id', 'order_date', 'status', 'price'];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
