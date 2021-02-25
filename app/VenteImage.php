<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenteImage extends Model
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
