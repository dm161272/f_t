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


//All listings
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing data
Route::post('/listings', [ListingController::class, 'store']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update listing Edit submit
Route::put('/listings/{listing}', [ListingController::class, 'update']);


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

