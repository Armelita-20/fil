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

Route::get('/', function () {
    return view('welcome',['mot'=>' BIENVENUE SUR SAP SAP CLEANNING']);
});

Route::get('/apps', function () {
    return view('layouts.apps');
});

Auth::routes();

//Route pressing
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pressingpropo', 'PressingpropoController@index')->name('pressingpropo@index');
Route::get('/pressingdereference', 'PressingdereferenceController@index')->name('pressingdereference@index');
Route::get('/trouvezpressing', 'TrouvezpressingController@index')->name('trouvezpressing@index');
Route::get('geoloc', 'PressingdereferenceController@localisation');

//Route assistance

Route::post('ajouter-assistance', 'AssistanceController@store');
Route::get('liste-assistance', 'AssistanceController@index');
Route::get('supprimer-assistance', 'AssistanceController@destroy');

//Route reservation
Route::get('reservationmenagere', 'ReservationController@create');
Route::post('ajouter-reservation', 'ReservationController@store');
Route::get('liste-reservation', 'ReservationController@index');
Route::get('supprimer-reservation', 'ReservationController@destroy');

//Route care wash
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carepropo', 'CarepropoController@index')->name('carepropo@index');
Route::get('/carereference', 'CarereferenceController@index')->name('carereference@index');
Route::get('/trouvezcare', 'TrouvezcareController@index')->name('trouvezcare@index');
Route::get('geoloc', 'CarereferenceController@localisation');

//Route Dashboard
Route::get('/admin', 'HomeController@admin')->name('admine');

//Route care contact
Route::get('/contact', 'ContactController@index')->name('contact@index');

//Route aidemanager
Route::get('/aidemenagere', 'AidemenagereController@index')->name('aidemenagere@index');


//Route care contact
Route::get('/apropos', 'AproposController@index')->name('apropos@index');


//Route pagedashbord

//Route pressing
Route::get('formpressing', 'FormpressingController@create');
Route::post('ajouter-formpressing', 'FormpressingController@store');
Route::get('editer-pressing', 'FormpressingController@edit');
Route::post('update-pressing/{id}', 'FormpressingController@update');
Route::get('supprimer-pressing', 'FormpressingController@destroy');
Route::get('liste-pressing', 'FormpressingController@index');

//Route carewash
Route::get('formcare', 'FormcareController@create');
Route::get('liste-carewash', 'FormcareController@index');
Route::post('ajouter-formcare', 'FormcareController@store');
Route::get('supprimer-carewash', 'FormcareController@destroy');
Route::get('editer-carewash', 'FormcareController@edit');
Route::post('update-carewash/{id}', 'FormcareController@update');

//Route menagere

Route::get('formmenagere', 'FormmenagereController@create');
Route::get('liste-menagere', 'FormmenagereController@index');
Route::post('ajouter-formmenagere', 'FormmenagereController@store');
Route::get('editer-menagere', 'FormmenagereController@edit');
Route::post('update-menagere/{id}', 'FormmenagereController@update');
Route::get('supprimer-menagere/{id}', 'FormmenagereController@destroy');


