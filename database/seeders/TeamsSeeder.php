<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::factory()->count(50)->create();
        Team::table('teams')->insert([
            'name' => Str::random(10),
            'slug' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
