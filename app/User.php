<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public static function findOrCreate($data)
    {
       $user = static::where('email', $data['email'])->first();

       if(!$user)
       {
            $user =  static::create([
            'name' => $data['contact_name'],
            'email' => $data['email'],
            'password' => bcrypt('123456'),
        ]);
       } 

       return $user->id;
    }


    public function venues()
    {
        return $this->hasMany(Venue::class);
    }


    public function orders()
    {
        return $this->hasMany(EventPayment::class);
    }


    public function vendors()
    {
        return $this->hasMany(Vendor::class);
    }


    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    
    public function goingTo()
    {
        return $this->belongsToMany(Event::class);
    }


    public function isGoingTo(Event $event)
    {
        return $this->goingTo()->where('id', $event->id)->exists();
    }
}
