<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=> 'administrator',
        ]);
        Role::create([
            'name'=> 'teams-manager',
        ]);
    }
}
