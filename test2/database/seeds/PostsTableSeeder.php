<?php
//19장에서 생성
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //19장에서 생성
        App\Post::truncate();
        factory('App\Post',20)->create();
    }
}
