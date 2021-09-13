<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Group;

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
        User::factory()->create(['name' => 'Admin', 'email' =>'admin@gmail.com','role' => 'admin']);
        User::factory()->create(['name' => 'Anya', 'email' =>'anya@gmail.com','role' => 'admin']);

        User::factory(1)->create(['name' => 'Amr', 'email' =>'amr@gmail.com']);
        User::factory(1)->create(['name' => 'Andres', 'email' =>'andres@gmail.com']);
        User::factory(1)->create(['name' => 'Franco', 'email' =>'franco@gmail.com']);
        User::factory(1)->create(['name' => 'Abdulha', 'email' =>'abdulha@gmail.com']);
        User::factory(1)->create(['name' => 'Thierno', 'email' =>'thierno@gmail.com']);


        Group::factory(5)->create();
    }
}
