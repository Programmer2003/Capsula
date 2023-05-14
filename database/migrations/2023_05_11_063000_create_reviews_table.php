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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('rating')->unsigned();
            $table->text('body')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            
            $table->unsignedBigInteger('product_id');

            $table->unsignedBigInteger('user_id')->nullable();

            $table->index('product_id','review_product_idx');
            $table->foreign('product_id','review_product_fk')->on('products')->references('id');

            $table->index('user_id','review_user_idx');
            $table->foreign('user_id','review_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('reviews');
    }
};
