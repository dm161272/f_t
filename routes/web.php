<?php
/*
Verb	      URI	                     Action       	Route Name
GET	      show all listings	            - index	
GET	    show form to create new listing	- create	
POST	store new listing	            - store	
GET	    show single listing             - show	
GET	    show form to edit listing	    - edit	
PUT/PATCH	update listing              - update	
DELETE	    delete listing              - destroy      comments.destroy
*/


use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use PhpParser\Node\Expr\List_;

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
Route::get('/', [ListingController::class, 'index']);


//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
       

/* testing route
Route::get('/hello', function() {
    return response('<h1>Hello World!</h1>', 200)
    ->header('Content-Type', 'text/plain');
});
//testing route
Route::get('/search', function(Request $request) {
    //dd($request);
   return ($request->name . '  ' . $request->city);
});*/

