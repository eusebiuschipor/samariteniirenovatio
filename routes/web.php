<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomePage@show');
Route::get('photo-gallery/{galleryName}/{numberOfPhotos?}', 'PhotoGallery@show');
Route::get('contact', 'ContactController@show');
Route::get('politica-de-confidentialitate', 'GdprController@showTheConfidentialityPolicy');
Route::get('politica-generala-privind-protectia-datelor-cu-caracter-personal', 'GdprController@showTheGeneralDataPolicy');
Route::get('termeni-si-conditii', 'GdprController@showTermsAndConditions');
Route::post('insert','MessagesController@insert');

Route::get('sos','SosController@show');
Route::post('sendSosEmail','SosController@send');

