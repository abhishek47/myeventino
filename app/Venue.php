<?php

namespace App;

use App\Traits\{Reviewable, Favouritable};
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Venue extends Model
{

    
    use SearchableTrait;

    use Reviewable;

    use Favouritable;
    
    protected $guarded = [];

     protected $with = ['favourites'];

    protected $appends = ['favouritesCount'];


    protected $searchable = [
        'columns' => [
            'venue_name' => 10,
            'city' => 5,
            'address' => 3,
        ]
    ];


   public function getRouteKeyName()
   {
     return 'slug';
   }

   public function sections()
   {
      return $this->hasMany(VenueSection::class);
   }


   public function photos()
   {
      return $this->hasMany(VenuePhoto::class);
   }

   public function photosPath()
   {
        return '/venues/' . $this->slug . '/photos';   
   }


   public function setVenueTypeAttribute($value)
   {
        $this->attributes['venue_type'] = json_encode($value);
   }

   public function setBestForAttribute($value)
   {
        $this->attributes['best_for'] = json_encode($value);
   }

   public function setFacilitiesAttribute($value)
   {
        $this->attributes['facilities'] = json_encode($value);
   }

   public function setParametersAttribute($value)
   {
        $this->attributes['parameters'] = json_encode($value);
   }

   public function setFoodAvailableAttribute($value)
   {
        $this->attributes['food_available'] = json_encode($value);
   }



    public function getMinCapAttribute()
    {
        return $this->sections()->min('floating_capacity');
    }  

    public function getMaxCapAttribute()
    {
        return $this->sections()->max('floating_capacity');
    }   

    public function getTheatreCapAttribute()
    {
        return $this->sections()->max('theatre_capacity');
    }

    public function getFloatingCapAttribute()
    {
        return $this->sections()->max('floating_capacity');
    }  

    public function getClusterCapAttribute()
    {
        return $this->sections()->max('cluster_capacity');
    } 

    public function getStartsFromAttribute()
    {
        return $this->sections()->min('price');
    } 


    public function getServesFromAttribute()
    {
        return $this->sections()->min('price_person');
    } 


    public function getTypesAttribute()
    {
        return json_decode($this->venue_type);
    }





 


}
