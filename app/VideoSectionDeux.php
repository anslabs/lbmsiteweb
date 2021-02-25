<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoSectionDeux extends Model
{
    protected $fillable = [
        'title', 
        'video', 
    ];


    public function updateModel($request)
    {
      $this->update($request->all());
      return $this;
    }

}
