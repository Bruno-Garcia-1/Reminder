<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'first_name' => 'Bruno',
            'last_name' => 'Garcia',
            'email' => 'bruno@garcia.com',
            'password' => bcrypt('fuawdxdn')
        ]);

        User::factory()->count(5)->create();
    }
}
