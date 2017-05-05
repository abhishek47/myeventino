<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    
  protected $guarded = [];


   public function getRouteKeyName()
     {
        return 'slug';
     }
 


}
