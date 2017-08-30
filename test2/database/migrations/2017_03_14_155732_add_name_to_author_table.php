<?php
//11장에서 만든 테이블
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameToAuthorTable extends Migration
{
  public function up()
    {
      //11장에서 만든 테이블
        Schema::table('authors', function(Blueprint $table) {
            $table->string('name')->after('email')->nullable(); // nullable()은 NULL 을 허용한다는 얘기
        });
    }

    public function down()
    {
      //11장에서 만든 테이블
        Schema::table('authors', function(Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
