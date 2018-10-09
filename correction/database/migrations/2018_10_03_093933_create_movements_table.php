<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('article_id')->unsigned()->index();
            $table->decimal('quantity', 8, 2);
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP'))->index();
            $table->integer('movement_type_id')->unsigned()->index();
            $table->integer('purchase_id')->unsigned()->nullable()->index();
            $table->integer('sale_id')->unsigned()->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movements');
    }
}
