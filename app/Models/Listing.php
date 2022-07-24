<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
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
}


