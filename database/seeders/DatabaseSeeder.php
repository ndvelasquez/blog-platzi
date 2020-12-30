<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Nestor Velasquez',
            'email' => 'ndvelasquezl@ngsyss.com',
            'password' => bcrypt('123456')
        ]);
        \App\Models\Post::factory()->count(30)->create();
    }
}
