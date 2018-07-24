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
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('body');
            $table->integer('category');
            $table->string('image')->nullable();
            $table->float('regular_price')->default(0);
            $table->float('sales_price')->default(0);
            $table->integer('user_id');
            // $table->integer('gallery')->nullable();
            $table->enum('status', ['active', 'inactive', 'trash'])->default('active');
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
