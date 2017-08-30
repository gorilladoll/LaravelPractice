<?php

use Illuminate\Database\Seeder;
//19장에서 생성
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Model::unguard();
        $this->call(UserTableSeeder::class);
        $this->command->info('Users table seeded');

        $this->call(PostsTableSeeder::class);
        $this->command->info('Posts table seeded');

        Model::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
