<?php

namespace App;

use Image;
use Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;

class VenuePhoto extends Model
{
    
    protected $fillable = ['venue_id', 'path', 'thumbnail_path'];

    protected $file;

    protected $venue;

    
    public static function fromFileAndVenue($file, $venue)
    {
    	$photo = new static;

    	$photo->file = $file;

    	$photo->venue = $venue;

    	$photo->venue_id = $venue->id;

        $photo->store();

        return $photo;
    }

 
    private function store()
    {
       
        $this->path = Storage::putFile($this->baseDir(), $this->file, 'public'); 


		$this->thumbnail_path = sprintf("%s/thumbnails/tn-%s", $this->baseDir(), basename($this->path));


        $this->path = Storage::disk('s3')->url($this->path);


        $this->makeThumbnail();

    }

    public function saveWithResponse()
    {
    	if($this->save())
    	{
    		return \Response::json('success', 200);
        }
            
        return \Response::json('error', 400);
    }


    protected function makeThumbnail()
    {
        $image = Image::make($this->file);

		$image->fit(375, 290, function ($constraint) {
		    $constraint->aspectRatio();
		});

		Storage::put($this->thumbnail_path, (string) $image->encode(), 'public');    

		$this->thumbnail_path = Storage::disk('s3')->url($this->thumbnail_path);
    }


    protected function baseDir()
    {
    	return 'uploads/venues/venue-' . $this->venue->id . '/images';
    }
}
