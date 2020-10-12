<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name'=> 'Vento',
        'email'=>'michael.vento@student.hepl.be',
        'password'=>Hash::make('azeazeaze')
    ]);
        User::create([
            'name'=> 'Toto',
            'email'=>'vento@hotmail.com',
            'password'=>Hash::make('azeazeaze')
        ]);
        User::factory()->times(5)->create();
    }
}
