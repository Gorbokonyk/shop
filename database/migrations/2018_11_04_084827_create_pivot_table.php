<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivots', function (Blueprint $table) {
            $table->increments('id');
            /**
             *   паттр репозіторій написати сервіс has picture і не вязати жостко зображення
             */

            $table->enum('type', ['product', 'blog']);

//            $table->unsignedInteger('product_id')->nullable();
//            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
//
//            $table->unsignedInteger('blog_id')->nullable();
//            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');

            $table->unsignedInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot');
    }
}
