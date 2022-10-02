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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Verb	      URI	                     Action       	Route Name
GET	      show all teams	            - index	
GET	    show form to create new team	- create	
POST	store new team	            - store	
GET	    show single team             - show	
GET	    show form to edit team	    - edit	
PUT/PATCH	update team              - update	
DELETE	    delete team              - destroy      comments.destroy
*/

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




//* **************** */
//All games
Route::get('/games', [GameController::class, 'index']);


       

Route::group(['middelware' => 'auth'], function() {

//Show create form
Route::get('/games/create', [GameController::class, 'create']);

//Store game data
Route::post('/games', [GameController::class, 'store']);

//Show edit form
Route::get('/games/{game}/edit', [GameController::class, 'edit']);

//Update game 
Route::put('/games/{game}', [GameController::class, 'update']);

//Delete game
Route::delete('/games/{game}', [GameController::class, 'destroy']);

//Manage Matches
Route::get('/games/manage', [GameController::class, 'manage']);

//Single game
Route::get('/games/{game}', [GameController::class, 'show']);



//All teams
Route::get('/', [TeamController::class, 'index'])->middleware(['verified']);

//Show create form
Route::get('/teams/create', [TeamController::class, 'create']);

//Store team data
Route::post('/teams', [TeamController::class, 'store']);

//Show edit form
Route::get('/teams/{team}/edit', [TeamController::class, 'edit']);

//Update team 
Route::put('/teams/{team}', [TeamController::class, 'update']);

//Delete team 
Route::delete('/teams/{team}', [TeamController::class, 'destroy']);

//Manage teams
Route::get('/teams/manage', [TeamController::class, 'manage']);

//Single team
Route::get('/teams/{team}', [TeamController::class, 'show']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout']);

});

require __DIR__.'/auth.php';
