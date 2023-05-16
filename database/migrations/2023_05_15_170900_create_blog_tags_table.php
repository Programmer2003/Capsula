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
        Schema::create('blog_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->unsignedBigInteger('b_tag_id');

            $table->index('blog_id', 'blog_tag_product_idx');
            $table->index('b_tag_id', 'blog_tag_tag_idx');

            $table->foreign('blog_id', 'blog_tag_blog_fk')->on('blogs')->references('id');
            $table->foreign('b_tag_id', 'blog_tag_tag_fk')->on('b_tags')->references('id');
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
        Schema::dropIfExists('blog_tags');
    }
};
