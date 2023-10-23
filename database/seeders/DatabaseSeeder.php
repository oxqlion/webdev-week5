<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Hero::factory(10)->create();
        Item::factory(10)->create();
    }
}
