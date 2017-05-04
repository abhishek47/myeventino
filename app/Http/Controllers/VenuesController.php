<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Venue;

use App\User;

class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
         return view('venues.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venues.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
       
        $data['facilities'] = json_encode($data['facilities']);

         $data['parameters'] = json_encode($data['parameters']);

         $data['food_available'] = json_encode($data['food_available']);
      
        $data['slug'] = str_slug($data['venue_name']);
        
        $user = User::where('email', $data['email'])->first();

       if(!$user)
       {
            $user =  User::create([
            'name' => $data['contact_name'],
            'email' => $data['email'],
            'password' => bcrypt('123456'),
        ]);
       } 
        
        $data['user_id'] = $user->id;

        Venue::create($data);

        session()->flash('flash_title', 'Venue Registered on Eventino!');
        session()->flash('flash_message', 'Venue has been successfully registered on Eventino!Please details of all the sections you have in the venue!'); 

         return redirect('/venues/sections/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('venues.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function previewSections()
    {
        return view('venues.preview.sections');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
