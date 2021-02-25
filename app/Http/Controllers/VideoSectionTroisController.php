<?php

namespace App\Http\Controllers;

use App\VideoSectionTrois;
use Illuminate\Http\Request;
use Validator;

class VideoSectionTroisController extends Controller
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
        return view('video_trois');
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

        VideoSectionTrois::create([
            'title' => $request->input('title'),
            'video' => $path, 
        ]);  


        return back()->with("success", "La vidéo a été enregistré avec succès");    
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\VideoSectionTrois  $videoSectionTrois
     * @return \Illuminate\Http\Response
     */
    public function show(VideoSectionTrois $videoSectionTrois)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VideoSectionTrois  $videoSectionTrois
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoSectionTrois $videoSectionTrois)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoSectionTrois  $videoSectionTrois
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoSectionTrois $videoSectionTrois)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoSectionTrois  $videoSectionTrois
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoSectionTrois $videoSectionTrois)
    {
        //
    }
}
