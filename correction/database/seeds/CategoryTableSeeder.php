<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Alimentation'],
            ['id' => 2, 'name' => 'Boissons'],
            ['id' => 3, 'name' => 'Produits ménagers'],
        ]);
    }
}
