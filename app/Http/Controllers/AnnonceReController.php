<?php

namespace App\Http\Controllers;

use App\AnnonceRe;
use Illuminate\Http\Request;

class AnnonceReController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
   public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
    
    public function index()
    {
         $annonces =  AnnonceRe::orderBy('id', 'desc')->get();
        return view('annonces',compact('annonces'));
       // return 'evenements';

    }
    public function allAnnonces()
    {
        $annonces = AnnonceRe::orderBy('id', 'desc')->get();
        return $annonces;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonce_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videoSectionUn  = new AnnonceRe;
        $videoSectionUn->titre = $request->titre;
        $videoSectionUn->article = $request->article;
        $videoSectionUn->save();
            return redirect()->back()->with('success', 'Enregistrer');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnnonceRe  $annonceRe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = AnnonceRe::findOrFail($id);

        return view('annoncevue',compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnnonceRe  $annonceRe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonce = AnnonceRe::find($id);
        return view('annonceedit', compact('annonce'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnnonceRe  $annonceRe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnonceRe $annonceRe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnnonceRe  $annonceRe
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $event = AnnonceRe::find($id);
        $event->delete();
        return back()->with("success", "Annonce supprimée avec succès");

    }
}
