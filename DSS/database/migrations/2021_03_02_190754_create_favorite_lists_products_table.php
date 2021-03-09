<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoriteListsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_list_product', function (Blueprint $table) {
            $table->timestamps();
        
            $table->bigInteger('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->bigInteger('favorite_list_id')->unsigned()->index();
            $table->foreign('favorite_list_id')->references('id')->on('favorite_lists')->onDelete('cascade');

            $table->primary(['product_id','favorite_list_id']);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_lists_products');
    }
}
