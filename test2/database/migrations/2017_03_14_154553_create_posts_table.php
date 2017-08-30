<?php
//11장에서 만든 테이블
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
        //11장에서 만든 테이블
         Schema::create('posts', function($table) {
             $table->increments('id'); // id INT AUTO_INCREMENT PRIMARY KEY
             $table->string('title', 100); // title VARCHAR(100)
             $table->text('body'); // body TEXT
             $table->timestamps(); // created_at TIMESTAMP, updated_at TIMESTAMP
         });
     }


    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        //11장에서 만든 테이블
        Schema::dropIfExists('posts'); // DROP TABLE posts
    }
}
