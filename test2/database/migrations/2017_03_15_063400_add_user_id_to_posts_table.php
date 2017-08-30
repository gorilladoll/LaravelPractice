<?php
//18장 모델 관계 맺기
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //18장 모델 관계 맺기
        Schema::table('posts',function(Blueprint $table){
          $table->integer('user_id')->unsigned()->after('id');
          $table->foreign('user_id')->references('id')->on('users')
          ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //18장 모델 관계 맺기
        Schema::table('posts',function(Blueprint $table){
          $table->dropForeign('posts_user_id_foreign');
          $table->dropColumn('user_id');
        });
    }
}
