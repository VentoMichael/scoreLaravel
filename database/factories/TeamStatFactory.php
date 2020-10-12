<?php

namespace Database\Factories;

use App\Models\TeamStat;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamStatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamStat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'games' => $this,
            'points' => $this,
            'wins' => $this,
            'losses' => $this,
            'draws' => $this,
            'goals_for' => $this,
            'goals_against' => $this,
            'goals_difference' => $this,
        ];
    }
}
