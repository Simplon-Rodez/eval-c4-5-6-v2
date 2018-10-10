<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [ 'id' => 1, 'name' => 'Ménagers Grossiste' ],
            [ 'id' => 2, 'name' => 'France Boissons' ],
            [ 'id' => 3, 'name' => 'Boulangerie industrielle' ],
            [ 'id' => 4, 'name' => 'Mespoulet' ],
            [ 'id' => 5, 'name' => 'Boulangerie artisanale' ],
            [ 'id' => 6, 'name' => 'Les pâtes italiennes' ],
            [ 'id' => 7, 'name' => 'Produits italiens' ],
        ]);
    }
}
