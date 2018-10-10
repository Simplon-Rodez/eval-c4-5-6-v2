<?php

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
        $this->call([
            UnitsTableSeeder::class,
            CategoryTableSeeder::class,
            ArticlesTableSeeder::class,
            SupplierTableSeeder::class,
            DirectionsTableSeeder::class,
            MovementTypesTableSeeder::class,
            PurchasesTableSeeder::class,
            MovementsTableSeeder::class,
            ArticleSupplierTableSeeder::class,
        ]);
    }
}
