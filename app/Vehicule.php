<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    // 
    protected $fillable = [
        'marque', 
        'model', 
        'filter', 
        'description',
        'moteur',
        'price',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5' 
    ];


    public function updateModel($request)
    {
      $this->update($request->all());
      return $this;
    }

}
