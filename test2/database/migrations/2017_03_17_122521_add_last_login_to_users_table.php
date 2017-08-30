<?php
//22장 이벤트
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLastLoginToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //22장 이벤트
        Schema::table('users',function(Blueprint $table){
          $table->timestamp('last_login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //22장 이벤트
        Schema::table('users',function(Blueprint $table){
          $table->dropColumn('last_login');
        });
    }
}
