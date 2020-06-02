<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{

  protected $fillable = [
    'filename'
  ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function type()
    {
      $ext = strtolower(pathinfo($this->filename)['extension']);
      return in_array($ext, ['mp4', 'avi']) ? 'video' : 'image';
    }
}