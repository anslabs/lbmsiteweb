<?php

namespace App\Http\Controllers;

use App\VideoSectionDeux;
use Illuminate\Http\Request;
use Validator;


class VideoSectionDeuxController extends Controller
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
        return view('video_deux');
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

        VideoSectionDeux::create([
            'title' => $request->input('title'),
            'video' => $path, 
        ]);  


        return back()->with("success", "La vidéo a été enregistré avec succès");    
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\VideoSectionDeux  $videoSectionDeux
     * @return \Illuminate\Http\Response
     */
    public function show(VideoSectionDeux $videoSectionDeux)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VideoSectionDeux  $videoSectionDeux
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoSectionDeux $videoSectionDeux)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoSectionDeux  $videoSectionDeux
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoSectionDeux $videoSectionDeux)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoSectionDeux  $videoSectionDeux
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoSectionDeux $videoSectionDeux)
    {
        //
    }
}
