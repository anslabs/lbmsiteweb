<?php

namespace App\Http\Controllers;

use App\VideoSectionQuatre;
use Illuminate\Http\Request;
use Validator;

class VideoSectionQuatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video_quatre');
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
            'video'      =>   'required|max:25120',
        ]);

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        
        //$path = $request->video->store('videos');

        $video = $request->file('video');
        if ($video != null ) {  
            
         /*   $videoextension = $video->getClientOriginalExtension();
            
            $videoname =  time().time().'.'.$videoextension;
        
            $video->move(public_path().'/uploads/videos', $videoname);
            
            $path = public_path().'/uploads/videos'.$videoname;*/

            $path =  time().time().'.'.$videoextension;
        }else{
            return response()->json(['error'=>'Filed cant be empty']);
        }

        VideoSectionQuatre::create([
            'title' => $request->input('title'),
            'video' => $path, 
        ]);  


        return back()->with("success", "La vidéo a été enregistré avec succès");    
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\VideoSectionQuatre  $videoSectionQuatre
     * @return \Illuminate\Http\Response
     */
    public function show(VideoSectionQuatre $videoSectionQuatre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VideoSectionQuatre  $videoSectionQuatre
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoSectionQuatre $videoSectionQuatre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoSectionQuatre  $videoSectionQuatre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoSectionQuatre $videoSectionQuatre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoSectionQuatre  $videoSectionQuatre
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoSectionQuatre $videoSectionQuatre)
    {
        //
    }
}
