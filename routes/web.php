<?php
/*
Verb	      URI	                     Action       	Route Name
GET	      show all teams	            - index	
GET	    show form to create new team	- create	
POST	store new team	            - store	
GET	    show single team             - show	
GET	    show form to edit team	    - edit	
PUT/PATCH	update team              - update	
DELETE	    delete team              - destroy      comments.destroy
*/


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;

//* **************** */
//All games
Route::get('/games', [GameController::class, 'index']);

//Show create form
Route::get('/games/create', [GameController::class, 'create'])->middleware('auth');

//Store game data
Route::post('/games', [GameController::class, 'store']);

//Show edit form
Route::get('/games/{game}/edit', [GameController::class, 'edit'])->middleware('auth');

//Update game 
Route::put('/games/{game}', [GameController::class, 'update'])->middleware('auth');

//Delete game
Route::delete('/games/{game}', [GameController::class, 'destroy'])->middleware('auth');

//Manage Matches
Route::get('/games/manage', [GameController::class, 'manage'])->name('login');

//Single game
Route::get('/games/{game}', [GameController::class, 'show']);


/* **************** */


//All teams
Route::get('/', [TeamController::class, 'index']);

//Show create form
Route::get('/teams/create', [TeamController::class, 'create'])->middleware('auth');

//Store team data
Route::post('/teams', [TeamController::class, 'store']);

//Show edit form
Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->middleware('auth');

//Update team 
Route::put('/teams/{team}', [TeamController::class, 'update'])->middleware('auth');

//Delete team 
Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->middleware('auth');

//Manage teams
Route::get('/teams/manage', [TeamController::class, 'manage'])->name('login');

//Single team
Route::get('/teams/{team}', [TeamController::class, 'show']);



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

