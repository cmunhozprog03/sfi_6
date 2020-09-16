<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoreProductsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('more__products__products', function (Blueprint $table) {

            $table->unsignedBigInteger('more_products_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('more_products_id')->references('id')->on('products');
            $table->foreign('product_id')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('more__products__products');
    }
}
