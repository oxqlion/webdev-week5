<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Magic Blade',
                'type' => 'Physical',
                'damage' => rand(50, 100),
                'speed' => rand(10, 30),
                'defense' => 0,
                'passive' => 'Life Drain',
            ],
            [
                'name' => 'Blade of Despair',
                'type' => 'Physical',
                'damage' => rand(60, 120),
                'speed' => rand(10, 25),
                'defense' => 0,
                'passive' => 'Despair',
            ],
            [
                'name' => 'Endless Battle',
                'type' => 'Physical',
                'damage' => rand(40, 80),
                'speed' => rand(15, 35),
                'defense' => 0,
                'passive' => 'Divine Justice',
            ],
            [
                'name' => 'Blade Armor',
                'type' => 'Physical',
                'damage' => rand(10, 20),
                'speed' => rand(5, 10),
                'defense' => rand(30, 50),
                'passive' => 'Counterstrike',
            ],
            [
                'name' => 'Rose Gold Meteor',
                'type' => 'Physical',
                'damage' => rand(40, 80),
                'speed' => rand(10, 25),
                'defense' => 0,
                'passive' => 'Lifeline',
            ],
            [
                'name' => 'Holy Crystal',
                'type' => 'Magic',
                'damage' => rand(50, 90),
                'speed' => rand(5, 20),
                'defense' => 0,
                'passive' => 'Exterminate',
            ],
            [
                'name' => 'Eternal Scepter',
                'type' => 'Magic',
                'damage' => rand(40, 80),
                'speed' => rand(10, 25),
                'defense' => 0,
                'passive' => 'Sorcery',
            ],
            [
                'name' => 'Concentrated Energy',
                'type' => 'Magic',
                'damage' => rand(30, 60),
                'speed' => rand(5, 15),
                'defense' => 0,
                'passive' => 'Recharge',
            ],
            [
                'name' => 'Oracle',
                'type' => 'Magic',
                'damage' => rand(40, 80),
                'speed' => rand(5, 20),
                'defense' => 0,
                'passive' => 'Bless',
            ],
            [
                'name' => 'Astral Wand',
                'type' => 'Magic',
                'damage' => rand(35, 70),
                'speed' => rand(5, 15),
                'defense' => 0,
                'passive' => 'Starlight Pulse',
            ],
            [
                'name' => 'Cursed Helmet',
                'type' => 'Defense',
                'damage' => 0,
                'speed' => 0,
                'defense' => rand(40, 80),
                'passive' => 'Burning Soul',
            ],
            [
                'name' => 'Blade Armor',
                'type' => 'Defense',
                'damage' => 0,
                'speed' => 0,
                'defense' => rand(30, 60),
                'passive' => 'Counterstrike',
            ],
            [
                'name' => 'Dominance Ice',
                'type' => 'Defense',
                'damage' => 0,
                'speed' => 0,
                'defense' => rand(40, 80),
                'passive' => 'Arctic Cold',
            ],
            [
                'name' => 'Oracle',
                'type' => 'Defense',
                'damage' => 0,
                'speed' => 0,
                'defense' => rand(30, 70),
                'passive' => 'Bless',
            ],
            [
                'name' => 'Athena"s Shield',
                'type' => 'Defense',
                'damage' => 0,
                'speed' => 0,
                'defense' => rand(50, 90),
                'passive' => 'Shield',
            ],
            // Add more items here
        ];

        foreach ($items as $item) {
            DB::table('items')->insert($item);
        }
    }
}
