<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Listing;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'date', 'listings_id1', 'listings_id2'];

public function scopeFilter($query, array $filters)
{
    if($filters['search'] ?? false)
    {

        $query->where('name', 'like', '%' . request('search') . '%');

     }
   }
   //Listing relationship to
   public function listings() {
       return $this->belongsTo(Listing::class, 'listings_id1', 'listings_id2');
   }
}


   