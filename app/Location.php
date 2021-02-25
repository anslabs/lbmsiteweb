<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'marque', 
        'model', 
        'filter', 
        'description',
        'moteur',
        'price',
        'image1',
    ];


    public function updateModel($request)
    {
      $this->update($request->all());
      return $this;
    }

}
