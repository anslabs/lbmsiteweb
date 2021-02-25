<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationImage extends Model
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
