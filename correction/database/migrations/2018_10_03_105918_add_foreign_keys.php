<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('unit_id')->references('id')->on('units');
        });

        Schema::table('article_supplier', function(Blueprint $table) {
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });

        Schema::table('movements', function(Blueprint $table) {
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('movement_type_id')->references('id')->on('movement_types');
            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreign('sale_id')->references('id')->on('sales');
        });

        Schema::table('purchases', function(Blueprint $table) {
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });

        Schema::table('movement_types', function(Blueprint $table) {
            $table->foreign('direction_id')->references('id')->on('directions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->dropForeign('articles_category_id_foreign');
            $table->dropForeign('articles_unit_id_foreign');
        });

        Schema::table('article_supplier', function(Blueprint $table) {
            $table->dropForeign('article_supplier_article_id_foreign');
            $table->dropForeign('article_supplier_supplier_id_foreign');
        });

        Schema::table('movements', function(Blueprint $table) {
            $table->dropForeign('movements_article_id_foreign');
            $table->dropForeign('movements_movement_type_id_foreign');
            $table->dropForeign('movements_purchase_id_foreign');
            $table->dropForeign('movements_sale_id_foreign');
        });

        Schema::table('purchases', function(Blueprint $table) {
            $table->dropForeign('purchases_supplier_id_foreign');
        });

        Schema::table('movement_types', function(Blueprint $table) {
            $table->dropForeign('movement_types_direction_id_foreign');
        });
    }
}
