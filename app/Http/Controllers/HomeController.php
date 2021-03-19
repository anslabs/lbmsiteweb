<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vehicule;
use Marque;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     
     
 public function recrutement()
    {
        $annonces = DB::table('annonce_res')->select("*")->orderBy('annonce_res.created_at', 'desc')->get();
        return view('website.views.recrutement', compact('annonces'));
    }
    
    public function recrutementdetail($id){
              //le vehicule
        $annonce =  DB::table('annonce_res')
        ->select('*')
        ->where('annonce_res.id', $id)
        ->first();
        
        return view('website.views.recrutementdetails',compact('annonce'));
  
    }    
    public function index()
    {
        //12 dernières voitures
        //toutes les marques
        //image bg section 1
        $bgs = DB::table('accueil_images')->select("*")->orderBy('accueil_images.created_at', 'asc')->get();

        $marques = DB::table('marques')->select("*")->get();
        
        $new_vehicles =  DB::table('vehicules')
        ->join('marques', 'marques.id', '=', 'vehicules.marque')->orderBy('vehicules.created_at', 'desc')
        ->select('vehicules.*', 'marques.name as name_marque')
        ->limit(8)
        ->get();
        
        return view('website.views.home',compact(['new_vehicles','bgs', 'marques']));
    }

    public function vehicledetail($id)
    {
        //le vehicule
        $vehicle =  DB::table('vehicules')
        ->join('marques', 'marques.id', '=', 'vehicules.marque')
        ->select('vehicules.*', 'marques.name as name_marque')
        ->where('vehicules.id', $id)
        ->first();
        
        return view('website.views.details',compact('vehicle'));
    }
    public function about()
    {
        $bg = DB::table('apropos_images')->select("*")->orderBy('apropos_images.created_at', 'desc')->first();

        return view('website.views.apropos',compact('bg'));
    }
    public function vente()
    {
        //toutes les voitures
        //toutes les marques

        $marques = DB::table('marques')->select("*")->get();
        
        $vehicles =  DB::table('vehicules')
        ->join('marques', 'marques.id', '=', 'vehicules.marque')->orderBy('vehicules.created_at', 'desc')
        ->select('vehicules.*', 'marques.name as name_marque', 'marques.id as id_marque')

        ->get();
        
        return view('website.views.services.vente',compact(['vehicles', 'marques']));
    }
    public function venteparmarque($idmarque)
    {
        //toutes les voitures
        //toutes les marques

        $marques = DB::table('marques')->select("*")->get();
    
        $vehicles =  DB::table('vehicules')
        ->join('marques', 'marques.id', '=', 'vehicules.marque')->orderBy('vehicules.created_at', 'desc')
        ->select('vehicules.*', 'marques.name as name_marque', 'marques.id as id_marque')
        ->where('vehicules.marque', $idmarque)
        ->get();
        
        return view('website.views.services.vente',compact(['vehicles', 'marques']));
    }
    
    public function location(){
        $bg = DB::table('location_images')->select("*")->orderBy('location_images.created_at', 'desc')->first();

        $marques = DB::table('marques')->select("*")->get();
        
        $vehicles =  DB::table('vehicules')
        ->join('marques', 'marques.id', '=', 'vehicules.marque')->orderBy('vehicules.created_at', 'desc')
        ->select('vehicules.*', 'marques.name as name_marque', 'marques.id as id_marque')
        ->get();
        
        return view('website.views.services.location',compact(['vehicles', 'marques', 'bg']));
    }

    public function sav()
    {
        $bg = DB::table('sav_images')->select("*")->orderBy('sav_images.created_at', 'desc')->first();
        return view('website.views.services.sav',compact('bg'));
    }
    public function accessoires()
    {
        $bg = DB::table('accessoires_images')->select("*")->orderBy('accessoires_images.created_at', 'desc')->first();
        return view('website.views.services.accessoires',compact('bg'));
    }
    public function station()
    {
        return view('website.views.services.station');
    }
    public function regie()
    {
        return view('website.views.services.regie');
    }
}
