<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
   
    public function definition()
    {
    $names = ['Arizona Cardinals', 'Atlanta Falcons', 'Carolina Panthers',
    'Dallas Cowboys', 'Chicago Bears', 'Detroit Lions', 'Green Bay Packers', 'New Jersey Devils'];
        static $count = 0;
        $id_counter = User::select('id')
        ->count();
        $user_id = rand(1, $id_counter);
        ($user_id%2)? $logo = 'logos/team_logo_1.jpeg' : $logo = 'logos/team_logo_2.png';
        $count++;
        return [
            'user_id' => $user_id,
            'name' => $names[$count-1],
            'city' => fake()->city(),
            'country' => fake()->country(),
            'logo' => $logo,          
        ];
        
    }
}
