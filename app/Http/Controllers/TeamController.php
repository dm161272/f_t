<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    //show all teams
    public function index() {
           // dd(request('tag'));
        return view('teams.index', [
           
        'teams' => Team::latest()->filter(request(['search']))->paginate(6)
    
        ]);

    }

    //show single team
    public function show(Team $team) {

        return view('teams.show', [
            'team' => $team
         ]);
        
    }

    //show create form
    public function create() {
      return view('teams.create');
      }


    //store team(team)
  public function store(Request $request) {
  //dd($request->all());
  $formFields=$request->validate([
    'name' => ['required', Rule::unique('teams', 'name')],
    'city' => 'required',
    'country' => 'required',
  ]);

   if($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }
    
    $formFields['user_id'] = auth()->id();

  //dd($formFields);
  team::create($formFields);
  return redirect('/')->with('message', '| Team created successfully |');
}


      
   //show Edit form
    public function edit(Team $team) {
      //dd($team);
        return view('teams.edit' , ['team' => $team]);
    }



    //update team(team)
    public function update(Request $request, Team $team) {
      
      //check if user is an owner
      if($team->user_id != auth()->id()) {
        abort(403, '| You are not authorized for this action |');
      }


      $formFields=$request->validate([
        'name' => 'required',
        'city' => 'required',
        'country' => 'required',
      ]);

       if($request->hasFile('logo')) {
          $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

    //dd($formFields);
      $team->update($formFields);
      return redirect('/')->with('message', '| Team updated successfully |');
   }


    //delete team

    public function destroy(team $team) {
      
     //check if user is an owner
     if($team->user_id != auth()->id()) {
      abort(403, '| You are not authorized for this action |');
    }
    $team->delete();
    return redirect('/teams/manage')->with('message', '| Team deleted successfully |');
    }

//Manage team
public function manage() {
  return view('teams.manage', ['teams' => auth()->user()->teams()->get()]);


}




}
