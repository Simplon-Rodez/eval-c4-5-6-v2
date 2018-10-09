<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['id' => 1, 'name' => 'Eau minérale', 'category_id' => 2, 'unit_id' => 3, 'sales_price' => 1.00],
            ['id' => 2, 'name' => 'Spaghetti', 'category_id' => 1, 'unit_id' => 2, 'sales_price' => 0.5],
            ['id' => 3, 'name' => 'Serpillière', 'category_id' => 3, 'unit_id' => 3, 'sales_price' => 2.00],
            ['id' => 4, 'name' => 'Coca Cola 50cl', 'category_id' => 2, 'unit_id' => 4, 'sales_price' => 0.50],
            ['id' => 5, 'name' => 'Baguette', 'category_id' => 1, 'unit_id' => 3, 'sales_price' => 1.00],
            ['id' => 6, 'name' => 'Éponge', 'category_id' => 3, 'unit_id' => 3, 'sales_price' => 0.20]
        ]);
    }
}
