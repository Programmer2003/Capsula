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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            $table->boolean('available')->default(true);
            $table->text('images')->nullable();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');

            $table->timestamps();
            
            $table->softDeletes();
            
            $table->index('category_id','product_category_idx');
            $table->foreign('category_id','product_category_fk')->on('categories')->references('id');
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
};
