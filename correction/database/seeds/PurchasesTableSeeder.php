<?php

use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchases')->insert([
            [ 'id' => 1, 'supplier_id' => 1 ],
            [ 'id' => 2, 'supplier_id' => 2 ],
            [ 'id' => 3, 'supplier_id' => 3 ],
            [ 'id' => 4, 'supplier_id' => 4 ],
            [ 'id' => 5, 'supplier_id' => 5 ],
            [ 'id' => 6, 'supplier_id' => 6 ],
            [ 'id' => 7, 'supplier_id' => 7 ]
        ]);
    }
}
