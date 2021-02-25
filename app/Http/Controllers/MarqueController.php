<?php

namespace App\Http\Controllers;

use App\Marque;
use Illuminate\Http\Request;
use Validator;


class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marques =  Marque::orderBy('id', 'asc')->get();
        return view('marques',compact('marques'));
       // return 'evenements';


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allMarques()
    {
        $marques = Marque::orderBy('id', 'asc')->get();
        return $marques;
    }

    public function create()
    {
        return view('marque_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        if ($file != null) {
            $extension = $file->getClientOriginalExtension();
            $path =  time().time().'.'.$extension;
            $file->move(public_path() . '/marques', $path);
        } else {
            $path = null;
        }
        $videoSectionUn  = new Marque;
        $videoSectionUn->logo = $path;
        $videoSectionUn->name = $request->name;
        $videoSectionUn->save();
            return redirect()->back()->with('success', 'Enregistrer');
      
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marque = Marque::findOrFail($id);

        return view('marquevue',compact('marque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marque = Marque::find($id);
        return view('marqueedit', compact('marque'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator      =   Validator::make($request->all(),
        [ 
            'logo'      =>   'mimes:jpeg,png,jpg,bmp|max:2048', 
           // 'filename'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
        ]);

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $event = Marque::find($id);
                    
        $photo = $request->file('image');
        if ( $photo != null) {

            $path = $request->photo->store('marques');
            $event->logo =  $path; 
        } 

        $event->name = $request->input('name');
        $event->save();
        
        return back()->with("success", "Marque mise à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Marque::find($id);
        $event->delete();
        return back()->with("success", "Marque supprimée avec succès");

    }

}
