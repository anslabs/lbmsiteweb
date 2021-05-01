<?php

namespace App\Http\Controllers;

use App\AccueilImage;
use Illuminate\Http\Request;

class AccueilImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images =  AccueilImage::orderBy('id', 'asc')->get();
        return view('imagesaccueil',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accueil_image_form');
    }

    public function createtest()
    {
        return view('logo_image_form');
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
            $file->move(public_path() . '/images', $path);
        } else {
            $path = null;
        }
        $videoSectionUn  = new AccueilImage;
        $videoSectionUn->image = $path;
        $videoSectionUn->save();
            return redirect()->back()->with('success', 'Enregistrer');
      
    }    
    public function storetest(Request $request)
    {
        $file = $request->file('image');
 
        //dd($file);

       // $path = $file->store('logos');

      
       $path = $file->store('logos', 's3');
        return $path;
   
        /*
        $s3 = App::make('aws')->createClient('s3');
        $s3->putObject(array(
            'SourceFile' => $file,
        ));
        return $path;
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccueilImage  $accueilImage
     * @return \Illuminate\Http\Response
     */
    public function show(AccueilImage $accueilImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccueilImage  $accueilImage
     * @return \Illuminate\Http\Response
     */
    public function edit(AccueilImage $accueilImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccueilImage  $accueilImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccueilImage $accueilImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccueilImage  $accueilImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = AccueilImage::find($id);
        $event->delete();
        return back()->with("success", "Marque supprimée avec succès");

    }
}
