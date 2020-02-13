<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey_person extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'person_type', 'location', 'note'];

    public function survey()
    {
        return $this->hasOne('App\Survey');
    }


}
