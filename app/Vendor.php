<?php

namespace App;

use App\Traits\{Reviewable, Favouritable};
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Vendor extends Model
{
    use Reviewable;

    use Favouritable;
    
    protected $guarded = [];

    protected $with = ['favourites'];

    protected $appends = ['favouritesCount', 'isFavourited'];


   public function getRouteKeyName()
   {
     return 'slug';
   }
    
   public function photos()
   {
      return $this->hasMany(VendorPhoto::class);
   }

   public function photosPath()
   {
        return '/vendors/' . $this->slug . '/photos';   
   }
    

   public function setVendorTypesAttribute($value)
   {
        $this->attributes['vendor_types'] = json_encode($value);
   }

    public function setLocationsAttribute($value)
   {
        $this->attributes['locations'] = json_encode($value);
   }

   public function setFacilitiesAttribute($value)
   {
        $this->attributes['facilities'] = json_encode($value);
   }

   public function setPoliciesAttribute($value)
   {
        $this->attributes['policies'] = json_encode($value);
   } 

   public function getPoliciesAttribute()
   {
        return json_decode($this->attributes['policies'], true);
   }

   public function getVendorTypesAttribute()
   {
        return json_decode($this->attributes['vendor_types']);
   }

   public function getLocationsAttribute()
   {
        return json_decode($this->attributes['locations']);
   }

   public function packages()
   {
   	   return $this->hasMany(VendorPackage::class);
   }

   public function getStartingPackageAttribute()
   {
   		return $this->packages()->min('price');
   }


}
