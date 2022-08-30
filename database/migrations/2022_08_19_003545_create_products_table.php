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
        if(!Schema::hasTable('products')){
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('image');
                $table->string('slug');
                $table->string('price');
                $table->unsignedBigInteger('category_id')->nullable();
                // $table->foreign('category_id')->on('categories')->references('slug')->nullOnDelete();
                $table->string('discount')->nullable();
                $table->longText('description');
                $table->string('featured')->nullable();
                $table->timestamps();
            });
        }
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
};
