<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'date', 'user_id', 'teams_id1', 'teams_id2'];

public function scopeFilter($query, array $filters)
{
    if($filters['search'] ?? false)
    {

        $query->where('name', 'like', '%' . request('search') . '%');

     }
   }
   
    //teams names selector for matches display based on IDs
   public function select_teams_names($id = NULL) {
    if ($id != NULL) {
    $teams_names = Game::select('games.name', 't1.name AS team1', 
    't2.name AS team2')
    ->where('games.id', '=', $id )
    ->join('teams AS t1', 'games.teams_id1', 't1.id')
    ->join('teams AS t2', 'games.teams_id2', 't2.id')
    ->get()
    ->toArray();}
    else
    {
        $teams_names = Game::select('games.id','games.name', 't1.name AS team1', 
        't2.name AS team2', 'games.location', 'games.date')
        ->join('teams AS t1', 'games.teams_id1', 't1.id')
        ->join('teams AS t2', 'games.teams_id2', 't2.id')
        ->get()
        ->toArray();
    }

    return $teams_names;

    }

    //User relationship to
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

   //Team relationship to
   public function teams() {
       return $this->belongsTo(Team::class, 'teams_id1', 'teams_id2');
   }
}


   