<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'photo', 
        'article', 
    ];


    public function updateModel($request)
    {
      $this->update($request->all());
      return $this;
    }
}
