<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartsTable extends Migration
{
  public function up()
  {
    Schema::create('shopping_carts', function (Blueprint $table) {
      $table->id();
      $table->integer('quantity');
      $table->integer('total');
      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('product_id');

      $table->foreign('user_id')->references('id')->on('products');
      $table->foreign('product_id')->references('id')->on('products');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('shopping_carts');
  }
}
