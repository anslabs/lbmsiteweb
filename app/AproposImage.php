<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AproposImage extends Model
{
    protected $fillable = [
        'image'
    ];


    public function updateModel($request)
    {
      $this->update($request->all());
      return $this;
    }
}