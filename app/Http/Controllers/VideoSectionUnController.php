<?php

namespace App\Http\Controllers;
use App\VideoSectionUn;
use Illuminate\Http\Request;
class VideoSectionUnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('video_un');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $file = $request->file('video');
        if ($file != null) {
            $video = $file->getClientOriginalExtension();
            $title = str_replace(' ', '_', $request->get('title'));
            $name = $title . '.' . $video;
            $file->move(public_path() . '/vid', $name);
        } else {
            $name = null;
        }
        $videoSectionUn  = new VideoSectionUn;
        $videoSectionUn->video = $name;
        $videoSectionUn->title = $title;
        $videoSectionUn->save();
        return redirect()->back()->with('success', 'Enregistrer');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\VideoSectionUn  $videoSectionUn
     * @return \Illuminate\Http\Response
     */
    public function show(VideoSectionUn $videoSectionUn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VideoSectionUn  $videoSectionUn
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoSectionUn $videoSectionUn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoSectionUn  $videoSectionUn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoSectionUn $videoSectionUn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoSectionUn  $videoSectionUn
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoSectionUn $videoSectionUn)
    {
        //
    }
}
