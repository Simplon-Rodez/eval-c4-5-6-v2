<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            ['id' => 1, 'name' => 'Litres'],
            ['id' => 2, 'name' => 'Kg'],
            ['id' => 3, 'name' => 'Unités'],
            ['id' => 4, 'name' => 'Bouteilles'],
        ]);
    }
}
