<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepleysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('repleys',function(Blueprint $table){
          $table->increments('id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->integer('board_id')->unsigned();
          $table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
          $table->text('content');
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
        //
        Schema::table('repleys',function(Blueprint $table){
          $table->dropForeign('repleys_user_id_fogeign');
          $table->dropColumn('user_id');
          $table->dropForeign('repleys_boards_id_fogeign');
          $table->dropColumn('boards_id');
          Schema::dropIfExists('repleys');
          //cascade foreign key
        });
    }
}
