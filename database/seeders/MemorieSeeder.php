<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Memorie;

class MemorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function($user){
            $user->memories()->saveMany(
                Memorie::factory()->count(10)->make()
            );
        });
    }
}
