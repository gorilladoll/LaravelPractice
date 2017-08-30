<?php
//11장에서 만든 테이블
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //11장에서 만든 테이블
        Schema::create('authors', function($table) {
          $table->increments('id');
          $table->string('email',255);
          $table->string('password',60);
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
        Schema::dropIfExists('authors'); // DROP TABLE authors
    }
}
