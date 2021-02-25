<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use Validator;


class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events =  Evenement::orderBy('id', 'desc')->get();
        return view('evenements',compact('events'));
         
       // return 'evenements';

    }

    public function allEvents()
    {
        $events = Evenement::orderBy('id', 'desc')->get();
        return $events;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evenement');
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
                'title'      =>   'required',
                'description'     =>   'required', 
                'photo'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
                'article'      =>   'required',
               // 'filename'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
            ]);

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
                      
        $photo = $request->file('photo');
        if ( $photo != null) {

            $path = $request->photo->store('images');
            
       /*     $photoextension = $photo->getClientOriginalExtension();
            
            $photoname =  time().time().'.'.$photoextension;
            
            $photo->move(public_path().'/uploads/images', $photoname);*/
        }else{
            return response()->json(['error'=>'Filed cant be empty']);
        }

        Evenement::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'article' => $request->input('article'),
            'photo' => $path,
        ]);  
        return back()->with("success", "évènement créé avec succès");

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Evenement::findOrFail($id);

        return view('evenementvue',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Evenement::find($id);
        return view('evenementedit', compact('event'));   
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
        $event = Evenement::find($id);
                    
        $photo = $request->file('photo');
        if ( $photo != null) {

            $path = $request->photo->store('images');

            $event->photo =  $path; 
        } 

        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->article = $request->input('article');

        $event->save();
        
        return back()->with("success", "évènement mise à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Evenement::find($id);
        $event->delete();
        return back()->with("success", "évènement supprimé avec succès");

    }
}
