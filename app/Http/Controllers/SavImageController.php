<?php

namespace App\Http\Controllers;

use App\SavImage;
use Illuminate\Http\Request;

class SavImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sav_image_form');
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
        $videoSectionUn  = new SavImage;
        $videoSectionUn->image = $path;
        $videoSectionUn->save();
            return redirect()->back()->with('success', 'Enregistrer');
      
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\SavImage  $savImage
     * @return \Illuminate\Http\Response
     */
    public function show(SavImage $savImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SavImage  $savImage
     * @return \Illuminate\Http\Response
     */
    public function edit(SavImage $savImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SavImage  $savImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SavImage $savImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SavImage  $savImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SavImage $savImage)
    {
        //
    }
}
