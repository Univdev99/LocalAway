<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Customer extends Model
{
    //
    protected $dates = ['capsule_date'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
