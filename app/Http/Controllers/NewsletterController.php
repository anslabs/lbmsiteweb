<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Mailchimp;
use Validator;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newsletter');
    }

    public function apiSuscribe(Request $request){
        $validator      =   Validator::make($request->all(),
        [
            'email'      =>   'required',
            
        ]);

        $listId = "a96dbdd3b3";
        if(Mailchimp::check($listId, $request->email)){
             //print("true");
             return redirect()->back()->with('success', 'Vous êtes déjà inscrit à nàotre liste dediffusion');

        }
        else{
           // print("false");
                     // Adds/updates an existing subscriber:
                     Mailchimp::subscribe($listId,  $request->email, $merge = [], $confirm = true);
                     // Use $confirm = false to skip double-opt-in if you already have permission.
                     // This method will update an existing subscriber and will not ask an existing subscriber to re-confirm.
                     return redirect()->back()->with('success', 'Vous avez été enregistré à notre liste de diffusion');

         
        }
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
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribe($request->email);
            return redirect('newsletter')->with('success', 'Thanks For Subscribe');
        }
        return redirect('newsletter')->with('failure', 'Sorry! You have already subscribed ');
             
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
