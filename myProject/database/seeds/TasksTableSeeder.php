<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<20;$i++){
          DB::table('tasks')->insert([
            'project_id' => rand(1,4),
            'name' => '할일'.$i,
            'description' => '할일 상세 설명'.$i,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
          ]);
        }
    }
}
