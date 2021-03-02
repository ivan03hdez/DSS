<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->integer('price');
            $table->integer('promotionPrice');
            $table->string('description');
            $table->integer('stock');
            $table->string('color');
            $table->string('model');
            $table->bigInteger('promocion_id')->unsigned()->index();
            $table->foreign('promocion_id')
                ->references('id')
                ->on('promotions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
