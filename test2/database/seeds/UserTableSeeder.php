<?php
//19장에서 생성
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
        //19장에서 생성
        App\User::truncate();
        factory('App\User',10)->create();
    }
}
