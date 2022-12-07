<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_lots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('lot_id');
            $table->timestamps();

            $table->index('category_id', 'category_lot_category_idx');
            $table->index('lot_id', 'category_lot_lot_idx');
            $table->foreign('category_id', 'category_lot_category_fk')->on('categories')->references('id');
            $table->foreign('lot_id', 'category_lot_lot_fk')->on('lots')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_lots');
    }
};
