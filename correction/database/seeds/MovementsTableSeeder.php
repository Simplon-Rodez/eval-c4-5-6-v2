<?php

use Illuminate\Database\Seeder;

class MovementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movements')->insert([
            [ 'article_id' => 3, 'movement_type_id' => 1, 'purchase_id' => 1, 'quantity' => 100 ],
            [ 'article_id' => 6, 'movement_type_id' => 1, 'purchase_id' => 1, 'quantity' => 1000 ],
            [ 'article_id' => 1, 'movement_type_id' => 1, 'purchase_id' => 2, 'quantity' => 200 ],
            [ 'article_id' => 4, 'movement_type_id' => 1, 'purchase_id' => 2, 'quantity' => 400 ],
            [ 'article_id' => 5, 'movement_type_id' => 1, 'purchase_id' => 3, 'quantity' => 50 ],
            [ 'article_id' => 1, 'movement_type_id' => 1, 'purchase_id' => 4, 'quantity' => 200 ],
            [ 'article_id' => 4, 'movement_type_id' => 1, 'purchase_id' => 4, 'quantity' => 500 ],
            [ 'article_id' => 5, 'movement_type_id' => 1, 'purchase_id' => 5, 'quantity' => 100 ],
            [ 'article_id' => 2, 'movement_type_id' => 1, 'purchase_id' => 6, 'quantity' => 100 ],
            [ 'article_id' => 2, 'movement_type_id' => 1, 'purchase_id' => 7, 'quantity' => 100 ],
        ]);
    }
}
