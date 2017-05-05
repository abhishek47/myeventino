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
        $venues = Venue::latest()->get();
         
         return view('venues.index', compact('venues'));
    }
    
    public function filter()
    {
         
         return view('venues.filter');
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
        

        $this->validate($request, [
          
          'venue_name' => 'required',
          'venue_type' => 'required',
          'best_for'   => 'required',
          'total_area' => 'required',
          'sections'   => 'required',
          'address'    => 'required',
          'city'       => 'required',
          'state'      => 'required',
          'country'    => 'required',
          'pincode'    => 'required',
          'venue_since' => 'required',
          'rooms'      => 'required',
          'contact_name' => 'required',
          'email' => 'required',
          'phone' => 'required',

        ]);


        $data = $request->all();

         if($request->has('venue_type')){
         
           $data['venue_type'] = json_encode($data['venue_type']);

         }

         if($request->has('best_for')){
         
           $data['best_for'] = json_encode($data['best_for']);

         }
         
        if($request->has('facilities')){
         
           $data['facilities'] = json_encode($data['facilities']);

         }
         
         if($request->has('parameters')){
          
            $data['parameters'] = json_encode($data['parameters']);

          }  
          
          if($request->has('food_available')){
          
            $data['food_available'] = json_encode($data['food_available']);
          
          }

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
