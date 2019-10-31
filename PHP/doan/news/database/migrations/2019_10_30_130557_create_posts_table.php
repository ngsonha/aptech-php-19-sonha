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
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->text('content');
            $table->integer('so_like');
            $table->string('slug');
            $table->unique('slug');

            // $table->unsignedInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories');

            
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
      Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
