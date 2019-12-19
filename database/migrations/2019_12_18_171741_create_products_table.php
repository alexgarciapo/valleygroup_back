<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
			$table->string('ProductName');
			$table->integer('QuantityPerUnity');
			$table->float('UnitPrice');
			$table->integer('UnitsInStock');
			$table->unsignedInteger('categoryID'); 
            $table->foreign('categoryID')->references('id')->on('categories');
			$table->unsignedInteger('suppliersID'); 
            $table->foreign('suppliersID')->references('id')->on('suppliers');
            $table->timestamps();
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
