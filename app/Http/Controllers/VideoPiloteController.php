<?php

namespace App\Http\Controllers;

use App\VideoPilote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Notifiable;

class VideoPiloteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas  =   VideoPilote::all();
        return view('list_videopilote', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('newvideopilote');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        // file validation
        
        $validator      =   Validator::make($request->all(),
            [
                'title'      =>   'required',
                'speculation' =>   'required',
                'resume'     =>   'required',
                'photo'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
                'video'      =>   'required|mimes:mp4,avi,webm',
               // 'filename'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048',
            ]);

        // if validation fails
        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
		
        $video = $request->file('video');
        $photo = $request->file('photo');
		
        if ($video != null && $photo != null) {

            $videoextension = $video->getClientOriginalExtension();
			
            $photoextension = $photo->getClientOriginalExtension();
            
            $videoname =  time().time().'.'.$videoextension;
			
            $photoname =  time().time().'.'.$photoextension;
            
			$video->move(public_path().'/uploads/pilotes/vids/', $videoname);
            
			$photo->move(public_path().'/uploads/pilotes/pics/', $photoname);
			
        }else{
            return response()->json(['error'=>'Filed cant be empty']);
        }
                  VideoPilote::create([
                    'title' => $request->input('title'),
                    'specvideo' => $request->input('speculation'),
                    'resume' => $request->input('resume'),
                    'ville' => "default",
                    'video' => $videoname,
                    'photo' => $photoname,
                ]);  
                return back()->with("success", "File uploaded successfully");

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\VideoPilote  $videoPilote
     * @return \Illuminate\Http\Response
     */
    public function show(VideoPilote $videoPilote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VideoPilote  $videoPilote
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoPilote $videoPilote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoPilote  $videoPilote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoPilote $videoPilote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoPilote  $videoPilote
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoPilote $videoPilote)
    {
        //
    }
}
