<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
          'name'=>'yjc',
          'password'=>bcrypt('1234'),
          //password_hash('',PASSWORD_BECRYPT);
          'email'=>'gorilladoll@yjc.ac.kr'
        ]);
    }
 }//Schema::create('tasks', function (Blueprint $table) {
//     $table->increments('id');
//     $table->integer('project_id')->unsigned();
//     $table->foreign('project_id')->references('id')->on('projects');
//     $table->string('name',50);
//     $table->text('description')->nullable();
//     $table->timestamps();
//     $table->timestamp('due_date')->nullable();
// });
