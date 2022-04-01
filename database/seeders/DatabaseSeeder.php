<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\carnivorosSeeder;
use Database\Seeders\herbívorosSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this ->call(carnivorosSeeder::class);
      //  $this ->call(herbívorosSeeder::class);
    }
}
