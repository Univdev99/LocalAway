<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\CustomerProfile;

class Customer extends Model
{
    //
    protected $dates = ['capsule_date'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function profile()
    {
        return $this->hasOne(CustomerProfile::class);
    }
}
