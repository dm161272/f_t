<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    //show all games
    public function index() {
           // dd(request('tag'));
        return view('games.index', [
           
        'games' => Game::latest()->filter(request(['search']))->paginate(6)
    
        ]);

    }


    public function index_view() {
      
      $listings = Listing::all();
    return view('games.index', ['listings'=>$listings]);

}


    //show single game
    public function show(Game $game) {

        return view('games.show', [
            'game' => $game
         ]);
        
    }

    //show create form
    public function create() {
      $listings = Listing::all();
  
      return view('games.create', ['listings'=>$listings]);
      }


    //store game(team)
  public function store(Request $request) {
  //dd($request->all());
  $formFields=$request->validate([
    'name' => ['required', Rule::unique('games', 'name')],
    'date' => 'required',
    'location' => 'required',
    'listings_id1' => 'required',
    'listings_id2' => 'required'
  
  ]);

  

  //dd($formFields);
  Game::create($formFields);
  return redirect('/games')->with('message', '| Game created successfully |');
}


      
   //show Edit form
    public function edit(Game $game) {
      //dd($game);
        return view('games.edit' , ['game' => $game]);
    }



    //update game(team)
    public function update(Request $request, Game $game) {

      $formFields=$request->validate([
        'name' => 'required',
        'location' => 'required',
       
      ]);

      
    //dd($formFields);
      $game->update($formFields);
      return redirect('/games/index/')->with('message', '| Game updated successfully |');
   }


    //delete game

    public function destroy(Game $game) {
      
   
    $game->delete();
    return redirect('/games')->with('message', '| Game deleted successfully |');
    }

//Manage game
public function manage() {
  return view('games.manage',  ['games' => auth()->user()->game()->get()]);


}




}
