<?php

namespace App\Http\Controllers;

use App\Vehicule;
use App\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;



class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$events =  Vehicule::orderBy('id', 'desc')->get();
        $events =  DB::table('vehicules')
        ->join('marques', 'marques.id', '=', 'vehicules.marque')
        ->select('vehicules.*', 'marques.name as name_marque')->get();
        return view('vehicules',compact('events'));
        //return view('settings.custom_fields.create', compact(['customFieldsTypes', 'customFieldModels', 'customFieldValues']));

         
       // return 'evenements';

    }

    public function allVehicules()
    {
        $events = Vehicule::orderBy('id', 'desc')->get();
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
        return view('vehicule_form',compact('marques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator      =   Validator::make($request->all(),
        [
            'marque'      =>   'required',
            'model' =>   'required',
            'filter'     =>   'required',
            'description' =>   'required',
            'moteur'      =>   'required',
            'price'      =>   'required',
            'image1'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
            'image2'      =>   'mimes:jpeg,png,jpg,bmp|max:2048',
            'image3'      =>   'mimes:jpeg,png,jpg,bmp|max:2048',
            'image4'      =>   'mimes:jpeg,png,jpg,bmp|max:2048',
            'image5'      =>   'mimes:jpeg,png,jpg,bmp|max:2048',
        ]);

        $path1 = "";
        $file1 = $request->file('image1');
        if ($file1 != null) {
            $extension = $file1->getClientOriginalExtension();
            $path1 =  time().time().'.'.$extension;
            $file1->move(public_path() . '/vehicules', $path1);
        } 


        $path2 = "";
        $file2 = $request->file('image2');
        if ($file2 != null) {
            $extension = $file2->getClientOriginalExtension();
            $path2 =  time().time().'.'.$extension;
            $file2->move(public_path() . '/vehicules', $path2);
        } 
        
        $path3 = "";
        $file3 = $request->file('image3');
        if ($file3 != null) {
            $extension = $file3->getClientOriginalExtension();
            $path3 =  time().time().'.'.$extension;
            $file3->move(public_path() . '/vehicules', $path3);
        } 
        
        $path4 = "";
        $file4 = $request->file('image4');
        if ($file4 != null) {
            $extension = $file4->getClientOriginalExtension();
            $path4 =  time().time().'.'.$extension;
            $file4->move(public_path() . '/vehicules', $path4);
        } 
        
        $path5 = "";
        $file5 = $request->file('image5');
        if ($file5 != null) {
            $extension = $file5->getClientOriginalExtension();
            $path5 =  time().time().'.'.$extension;
            $file5->move(public_path() . '/vehicules', $path5);
        } 
        


       // $videoSectionUn  = new Vehicule;
        $videoSectionUn = $request->all();
        $videoSectionUn['image1'] = $path1;
        $videoSectionUn['image2'] = $path2;
        $videoSectionUn['image3'] = $path3;
        $videoSectionUn['image4'] = $path4;
        $videoSectionUn['image5'] = $path5;

      //  $videoSectionUn->save();
      $vehicule = Vehicule::create($videoSectionUn);



        return redirect()->back()->with('success', 'Enregistrer');
      
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Vehicule::findOrFail($id);
        return view('vehiculevue',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marques =  Marque::orderBy('id', 'desc')->get();

        $event = Vehicule::find($id);
        return view('vehiculeedit',compact(['event', 'marques']));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evenement  $evenement
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
        $event = Vehicule::find($id);
                    
        $photo = $request->file('image1');
        if ( $photo != null) {

            $path = $request->photo->store('vehicules');
            $event->image1 =  $path; 
        } 

        $event->marque = $request->input('marque');
        $event->model = $request->input('model');
        $event->description = $request->input('description');
        $event->moteur = $request->input('moteur');
        $event->price = $request->input('price');

        $event->save();
        
        return back()->with("success", "Les informations du Véhicule ont été mise à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Vehicule::find($id);
        $event->delete();
        return back()->with("success", "Véhicule supprimé avec succès");

    }

}
