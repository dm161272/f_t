<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    //show all games
    public function index(Game $game) {
      $games = $game->select_teams_names();
      //dd($games);
      return view('games.index', [   
      'games' => $games,
    
        ]);

    }

    //show single game
    public function show(Game $game) {
       $teams_names = $game->select_teams_names($game->id);
       //dd($teams_names);
       return view('games.show', [
            'game' => $game, 
            'team1' => $teams_names[0]['team1'],
            'team2' => $teams_names[0]['team2'],
            'score_team1' => $teams_names[0]['score_team1'],
            'score_team2' => $teams_names[0]['score_team2'],

         ]);
        
    }

    //show create form
    public function create() {
      $teams = Team::all();
      return view('games.create', ['teams'=>$teams]);
      }

    //store game(team)
  public function store(Request $request) {
  //dd($request->all());
  $formFields=$request->validate([
    'name' => ['required', Rule::unique('games', 'name')],
    'date' => 'required',
    'location' => 'required',
    'teams_id1' => 'required',
    'teams_id2' => 'required',
    'score_team1' => 'required',
    'score_team2' => 'required',
  
  ]);

  $formFields['user_id'] = auth()->id();
  if ($formFields['teams_id1'] != $formFields['teams_id2']) {
  Game::create($formFields);
  return redirect('/games')->with('message', '| Match created successfully |');
  }
  else {

  return redirect('/games/create')->with('message', '| Match teams must be different |');

  }
}


      
   //show Edit form
    public function edit(Game $game) {
      $teams = Team::all();
      //dd($game);
        return view('games.edit' , ['teams' => $teams],  ['game' => $game]);
    }



    //update game(team)
    public function update(Request $request, Game $game) {

         //check if user is an owner
         if($game->user_id != auth()->id()) {
          abort(403, '| You are not authorized for this action |');
        }
  
    $formFields=$request->validate([
    'name' => 'required',
    'date' => 'required',
    'location' => 'required',
    'teams_id1' => 'required',
    'teams_id2' => 'required',
    'score_team1' => 'required',
    'score_team2' => 'required',
       
      ]);

    //dd($formFields);
      $game->update($formFields);
      return redirect('/games')->with('message', '| Match updated successfully |');
   }

    //delete game
    public function destroy(Game $game) {
    $game->delete();
    return redirect('/games/manage')->with('message', '| Match deleted successfully |');
    }

  //Manage game
  public function manage() {
  return view('games.manage',  ['games' => auth()->user()->games()->get()]);


}




}
