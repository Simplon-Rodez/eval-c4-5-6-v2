<?php

use Illuminate\Database\Seeder;

class DirectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directions')->insert([
            [ 'id' => 1, 'name' => 'Entrée', 'multiplier' => 1 ],
            [ 'id' => 2, 'name' => 'Sortie', 'multiplier' => -1 ],
        ]);
    }
}
