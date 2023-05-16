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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('body');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('blog_id');
            $table->unsignedBigInteger('parent_id')->nullable();

            $table->index('blog_id', 'comment_blog_idx');
            $table->foreign('blog_id', 'comment_blog_fk')->on('blogs')->references('id');

            $table->index('parent_id', 'review_parent_idx');

            $table->foreign('user_id', 'comment_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('comments');
    }
};
