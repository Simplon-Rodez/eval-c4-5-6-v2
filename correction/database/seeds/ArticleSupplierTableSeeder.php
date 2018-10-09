<?php

use Illuminate\Database\Seeder;

class ArticleSupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_supplier')->insert([
           [ 'article_id' => 1, 'supplier_id' => 2, 'purchase_price' =>  0.35 ],
           [ 'article_id' => 1, 'supplier_id' => 4, 'purchase_price' =>  0.37 ],
           [ 'article_id' => 2, 'supplier_id' => 6, 'purchase_price' =>  0.20 ],
           [ 'article_id' => 2, 'supplier_id' => 7, 'purchase_price' =>  0.35 ],
           [ 'article_id' => 3, 'supplier_id' => 1, 'purchase_price' =>  0.99 ],
           [ 'article_id' => 4, 'supplier_id' => 2, 'purchase_price' =>  0.21 ],
           [ 'article_id' => 4, 'supplier_id' => 4, 'purchase_price' =>  0.20 ],
           [ 'article_id' => 5, 'supplier_id' => 3, 'purchase_price' =>  0.40 ],
           [ 'article_id' => 5, 'supplier_id' => 5, 'purchase_price' =>  0.85 ],
           [ 'article_id' => 6, 'supplier_id' => 1, 'purchase_price' =>  0.09 ],
        ]);
    }
}
