<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

//Auth::routes();
Auth::routes(['register' => false]);

Route::get('uploadlogotest', 'AccueilImageController@createtest');
Route::post('uploadlogotest', 'AccueilImageController@storetest');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

///email
Route::post('sendContact', 'MailController@html_email');
Route::post('apiSuscribed', 'NewsletterController@apiSuscribe');
Route::post('bookCar', 'MailController@bookCar');


Route::resource('videosection1', 'VideoSectionUnController');
Route::resource('videosection2', 'VideoSectionDeuxController');
Route::resource('videosection3', 'VideoSectionTroisController');
Route::resource('videosection4', 'VideoSectionQuatreController');
Route::resource('videosection5', 'VideoSectionCinqController');
Route::resource('evenement', 'EvenementController');
Route::resource('annonce', 'AnnonceReController');
Route::post('ckeditor/image_upload', 'AnnonceReController@upload')->name('upload');

Route::resource('pilotevideo', 'VideoPiloteController')->middleware('auth');

Route::resource('newsletter','NewsletterController');

Route::resource('accessoiresimage', 'AccessoiresImageController')->middleware('auth');
Route::resource('accueilimage', 'AccueilImageController')->middleware('auth');
Route::resource('aproposimage', 'AproposImageController')->middleware('auth');
Route::resource('locationimage', 'LocationImageController')->middleware('auth');
Route::resource('savimage', 'SavImageController')->middleware('auth');
Route::resource('venteimage', 'VenteImageController')->middleware('auth');

Route::resource('vehicule', 'VehiculeController')->middleware('auth');
Route::resource('location', 'LocationController')->middleware('auth');
Route::resource('marque', 'MarqueController')->middleware('auth');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');

//Route::post('newsletter','NewsletterController@store');
/*
Website routes
*/

Route::get('/', 'HomeController@index');
Route::get('recrutement', 'HomeController@recrutement');
Route::get('recrutements/{id}','HomeController@recrutementdetail');
Route::get('apropos', 'HomeController@about');
Route::get('services/vente', 'HomeController@vente');
Route::get('services/location', 'HomeController@location');
Route::get('services/sav', 'HomeController@sav');
Route::get('services/accessoireautomobile', 'HomeController@accessoires');
Route::get('services/station', 'HomeController@station');
Route::get('vehicules/{id}','HomeController@vehicledetail');
Route::get('services/vente/{idmarque}','HomeController@venteparmarque');
/*Route::get('details', function () {
    return view('website.views.details');
});*/


