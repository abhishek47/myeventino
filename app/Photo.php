<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
    protected $fillable = ['venue_id', 'path'];
}
