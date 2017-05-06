<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Venue extends Model
{

    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'venue_name' => 10,
            'city' => 5,
            'address' => 3,
        ]
    ];
    
  protected $guarded = [];


   public function getRouteKeyName()
     {
        return 'slug';
     }


     public function photos()
     {
        return $this->hasMany(Photo::class);
     }
 


}
