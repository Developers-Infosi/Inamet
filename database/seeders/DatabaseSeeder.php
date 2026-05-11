<?php

namespace Database\Seeders;

use App\Models\TypeEvent;
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
        \App\Models\InametPrincipal::factory(1)->create();
        \App\Models\AboutInamet::factory(1)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Configuration::factory(1)->create();

      
    }
}
