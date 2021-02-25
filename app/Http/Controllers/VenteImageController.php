<?php

namespace App\Http\Controllers;

use App\VenteImage;
use Illuminate\Http\Request;

class VenteImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        return view('vente_image_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $videoSectionUn  = new VenteImage;
        $videoSectionUn->image = $path;
        $videoSectionUn->save();
            return redirect()->back()->with('success', 'Enregistrer');
      
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\VenteImage  $venteImage
     * @return \Illuminate\Http\Response
     */
    public function show(VenteImage $venteImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VenteImage  $venteImage
     * @return \Illuminate\Http\Response
     */
    public function edit(VenteImage $venteImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VenteImage  $venteImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VenteImage $venteImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VenteImage  $venteImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(VenteImage $venteImage)
    {
        //
    }
}
