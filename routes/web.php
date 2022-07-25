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


use App\Models\Listing;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use PhpParser\Node\Expr\List_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;


//All listings
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//Store listing data
Route::post('/listings', [ListingController::class, 'store']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update listing 
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete listing 
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->name('login');

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show register create form
Route::get('/register', [UserController::class, 'create']);

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Login form 
Route::get('/login', [UserController::class, 'login'])->name('login');
       
//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

