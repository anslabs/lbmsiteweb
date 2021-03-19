<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    // 
    protected $fillable = [
        'name', 'logo', 'slogan', 'marqueurlpath'
    ];


    public function updateModel($request)
    {
      $this->update($request->all());
      return $this;
    }
}
