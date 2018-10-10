<?php

use Illuminate\Database\Seeder;

class MovementTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movement_types')->insert([
            [ 'id'=> 1, 'name' => 'Achat', 'direction_id' => 1 ],
            [ 'id'=> 2, 'name' => 'Vente', 'direction_id' => 2 ],
            [ 'id'=> 3, 'name' => 'Perte', 'direction_id' => 2 ],
            [ 'id'=> 4, 'name' => 'Vol', 'direction_id' => 2 ]
        ]);
    }
}
