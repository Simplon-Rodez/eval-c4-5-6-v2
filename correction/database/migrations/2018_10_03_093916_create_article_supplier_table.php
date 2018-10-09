<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_supplier', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('article_id')->unsigned();
            $table->integer('supplier_id')->unsigned();
            $table->decimal('purchase_price', 10, 2);
            $table->primary(['article_id', 'supplier_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_supplier');
    }
}
