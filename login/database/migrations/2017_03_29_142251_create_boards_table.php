<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('boards',function(Blueprint $table){
          $table->increments('id');//Create Id
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->string('subject',100);//board subject
          $table->text('content');//board content
          $table->timestamps();//timestamps(created_at and updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boards',function(Blueprint $table){
          $table->dropForeign('boards_user_id_fogeign');
          $table->dropColumn('user_id');
          //cascade foreign key
        });
    }
}
