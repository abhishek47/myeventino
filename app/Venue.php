<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Venue extends Model
{

    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'venue.venue_name' => 10,
            'venue.city' => 5,
            'venue.address' => 3,
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
