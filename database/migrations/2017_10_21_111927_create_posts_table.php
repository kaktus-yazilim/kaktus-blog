<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('id', 32)->primary();
            $table->integer('author_id');
            $table->string('title');
            $table->string('url')->unique();
            $table->enum('status', ['published', 'draft', 'waiting', 'ready']);
            $table->text('content');
            $table->string('header_image_url');
            $table->boolean('private');
            $table->integer('view_count');
            $table->integer('comment_count');
            $table->dateTime('published_date');
            $table->string('parent_id',32)->nullable();
            $table->string('description', 160)->nullable();
            $table->string('canonical');
            $table->boolean('deleted');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
