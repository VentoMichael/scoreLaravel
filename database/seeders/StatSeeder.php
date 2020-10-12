<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\TeamStat;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = Team::with('matches.index')->get();
        foreach ($teams as $team) {
            TeamStat::create([
                'team_id'=> $team->team_id,
                'games'=> $team->matches_count,
                'points'=> $team->points,
                'wins'=> $team->wins,
                'losses'=> $team->losses,
                'draws'=> $team->draws,
                'goals_for'=> $team->goals_for,
                'goals_against'=> $team->goals_against,
                'goals_difference'=> $team->goals_difference
            ]);
        }
    }
}
