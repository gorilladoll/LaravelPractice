<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnstypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('snstypes',function(Blueprint $table){
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->text('content')->nullable();
          $table->text('image')->nullable();
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
        Schema::table('snstype',function(Blueprint $table){
          $table->dropForeign('snstype_user_id_fogeign');
          $table->dropColumn('user_id');
          Schema::dropIfExists('snstype');
          //cascade foreign key
        });
    }
}
