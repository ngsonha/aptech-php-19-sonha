<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemCotUserIdVaPostIdVaoBangComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
             $table->unsignedInteger('user_id');
         $table->foreign('user_id')->references('id')->on('users');
            
          $table->unsignedInteger('post_id');
             $table->foreign('post_id')->references('id')->on('posts');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            //
        });
    }
}
