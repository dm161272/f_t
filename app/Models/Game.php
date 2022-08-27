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
   public function select_teams_names() {
    $teams_names = Game::select('t1.name AS team1', 't2.name AS team2')
    ->join('teams AS t1', 'games.teams_id1', 't1.id')
    ->join('teams AS t2', 'games.teams_id2', 't2.id')
    ->get(['t1.name', 't2.name'])
    ->toArray();

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


   