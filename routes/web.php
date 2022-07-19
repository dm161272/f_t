<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
//All listings
Route::get('/', function () {
   
});


//Single listing
Route::get('/listings/{listing}', function (Listing $listing) {
       



//testing route
Route::get('/hello', function() {
    return response('<h1>Hello World!</h1>', 200)
    ->header('Content-Type', 'text/plain');
});
//testing route
Route::get('/search', function(Request $request) {
    //dd($request);
   return ($request->name . '  ' . $request->city);
});



