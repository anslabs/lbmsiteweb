<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Validator;
use App\Notifiable;

use Newsletter;
use Mailchimp;

class MailController extends Controller
{
    
   public function bookCar(Request $request){
        $validator      =   Validator::make($request->all(),
        [
            'nom'         =>   'required',
            'tel'        =>   'required',
            'days'     =>   'required',
            'vehicule'     =>   'required',
        ]);

    // if validation fails
    if($validator->fails()) {
        return back()->withErrors($validator->errors());
    }

        $data = array('nom'=> $request->input('nom'), "tel" => $request->input('tel'), "days" => $request->input('days'), "vehicule" => $request->input('vehicule'));
        Mail::send('emails.maillocation', $data, function($message) use($request){
            $message->to('reservation@lesbagnoles.com', 'Réservation LBM Location')->subject ("Réservation de voiture");
            $message->from("canalcombenin@gmail.com", $request->input('nom'));
            $message->cc("contacts@lesbagnoles.com", "LBM Réservation");
            $message->cc("cgansey@lesbagnoles.com", "LBM Réservation");
            $message->cc("ibanjun@lesbagnoles.com", "LBM Réservation");
            $message->cc("dg@lesbagnoles.com", "LBM Réservation");
            $message->cc("ebonou@lesbagnoles.com", "LBM Réservation");
        });
        return redirect()->back()->with('success', 'Email envoyé'); 
   }
   
    public function html_email(Request $request) {
        $validator      =   Validator::make($request->all(),
        [
            'nom'         =>   'required',
            'mail'        =>   'required',
            'subject'     =>   'required',
            'message'     =>   'required',
        ]);

    // if validation fails
    if($validator->fails()) {
        return back()->withErrors($validator->errors());
    }

        $data = array('nom'=> $request->input('nom'), "mail" => $request->input('mail'), "body" => $request->input('message'),);
        Mail::send('emails.mail', $data, function($message) use($request){
            $message->to('contacts@lesbagnoles.com', 'LBM')->subject ($request->input('subject'));
            $message->from($request->input('mail'), $request->input('nom'));
            $message->cc("info@canalcombenin.com", "CanalCom");
            $message->cc("ibanjun@lesbagnoles.com", "LBM Info");
            $message->cc("dg@lesbagnoles.com", "LBM Info");
            $message->cc("ebonou@lesbagnoles.com", "LBM Info");



            $message->replyTo($request->input('mail'), $request->input('nom'));
        });
        // return redirect()->back()->with('success', 'Email envoyé'); 
        echo "success";
     }

     public function apiSuscribe(Request $request){
        $validator      =   Validator::make($request->all(),
        [
            'email'      =>   'required',
            
        ]);

        $listId = "a96dbdd3b3";
        if(Mailchimp::check($listId, $request->email)){
             print("true");
        }
        else{
           // print("false");
                     // Adds/updates an existing subscriber:
                     Mailchimp::subscribe($listId,  $request->email, $merge = [], $confirm = true);
                     // Use $confirm = false to skip double-opt-in if you already have permission.
                     // This method will update an existing subscriber and will not ask an existing subscriber to re-confirm.
         
        }
    }


}
