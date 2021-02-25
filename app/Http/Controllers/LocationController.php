<?php

namespace App\Http\Controllers;

use App\Location;
use App\Marque;
use Illuminate\Http\Request;
use DB;
use Validator;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $events =  Location::orderBy('id', 'desc')->get();
      $events =  DB::table('locations')
      ->join('marques', 'marques.id', '=', 'locations.marque')
      ->select('locations.*', 'marques.name as name_marque')->get();
        return view('locations', compact('events'));
    }

    public function allLocations()
    {
        $events = Location::orderBy('id', 'desc')->get();
        return $events;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marques =  Marque::orderBy('id', 'desc')->get();
        return view('location_form',compact('marques'));
    }

    public function store(Request $request)
    {
        $validator      =   Validator::make($request->all(),
        [
            'marque'      =>   'required',
            'model' =>   'required',
            'filter'     =>   'required',
            'moteur'      =>   'required',
            'price'      =>   'required',
            'image1'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
        ]);

        $path1 = "";
        $file1 = $request->file('image1');
        if ($file1 != null) {
            $extension = $file1->getClientOriginalExtension();
            $path1 =  time().time().'.'.$extension;
            $file1->move(public_path() . '/locations', $path1);
        } 


       // $videoSectionUn  = new Vehicule;
        $videoSectionUn = $request->all();
        $videoSectionUn['image1'] = $path1;
      //  $videoSectionUn->save();
      $location = Location::create($videoSectionUn);

        return redirect()->back()->with('success', 'Enregistrer');
      
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Location::findOrFail($id);
        return view('locationvue',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marques =  Marque::orderBy('id', 'desc')->get();
        $event = Location::find($id);
        return view('locationedit',compact(['event', 'marques']));
  
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator      =   Validator::make($request->all(),
        [ 
            'photo'      =>   'mimes:jpeg,png,jpg,bmp|max:2048', 
           // 'filename'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
        ]);

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $event = Location::find($id);
                    
        $photo = $request->file('image1');
        if ( $photo != null) {
            $path = $request->photo->store('locations');
            $event->image1 =  $path; 
        } 
        $event->marque = $request->input('marque');
        $event->model = $request->input('model');
        $event->moteur = $request->input('moteur');
        $event->price = $request->input('price');
        $event->save();
        
        return back()->with("success", "Les informations du Véhicule ont été mise à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Location::find($id);
        $event->delete();
        return back()->with("success", "Véhicule supprimé avec succès");

    }
}
