<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $prjs=['개인','업무','학습','취업'];
        foreach($prjs as $prj){
          DB::table('projects')->insert([
            'name'=>$prj,
            'user_id'=>1,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
          ]);
        }
    }
}
