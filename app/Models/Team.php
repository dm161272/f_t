<?php

namespace App\Models;

use App\Models\Game;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['logo', 'name', 'user_id', 'city', 'country'];

public function scopeFilter($query, array $filters)
{
    if($filters['search'] ?? false)
    {

        $query->where('name', 'like', '%' . request('search') . '%');

     }
   }
   //User relationship to
   public function user() {
       return $this->belongsTo(User::class, 'user_id');
   }

    //Games relationship to
      public function games() {
        return $this->hasMany(Game::class, 'teams_id1', 'teams_id2' );
    }

}


