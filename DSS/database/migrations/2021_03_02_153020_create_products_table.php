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
            $table->float('price');
            $table->float('promotionPrice');
            $table->string('description');
            $table->integer('stock');
            $table->string('color');
            $table->string('model');
            $table->bigInteger('promotion_id')->unsigned()->index()->nullable();
            $table->foreign('promotion_id')->references('id')->on('promotions');//Cuando se borra una promocion, acaba la promocion pero no se destruye
            //objeto producto con lo cual tendremos que revisar manualmente que cada vez que se quiera destruir una promocion se ponga el campo promotion_id a NULL
            $table->string('image');
            $table->string('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
       /* Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_promotion_id_foreign');
            $table->dropColumn('promotion_id');
          });*/
        Schema::dropIfExists('products');
    }
}
