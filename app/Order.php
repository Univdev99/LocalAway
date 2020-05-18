<?php

namespace App;

use App\Customer;
use App\Stylist;
use App\Invoice;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'order_id', 'order_date', 'status', 'price'];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function user() {
        return $this->hasManyThrough(User::class, Customer::class);
    }

    public function stylist() {
        return $this->belongsTo(Stylist::class);
    }

    public function invoice() {
        return $this->hasMany(Invoice::class);
    }
}
