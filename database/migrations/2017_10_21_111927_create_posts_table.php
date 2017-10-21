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
            $table->enum('template', ['single', 'category']);
            $table->string('author_id',32);
            $table->string('title');
            $table->string('url')->unique();
            $table->enum('status', ['published', 'draft', 'waiting', 'ready']);
            $table->text('content');
            $table->boolean('private');
            $table->integer('view_count');
            $table->integer('comment_count');
            $table->dateTime('published_date');
            $table->string('parent_id');
            $table->string('meta_description', 160);
            $table->boolean('deleted');
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
        Schema::dropIfExists('posts');
    }
}
