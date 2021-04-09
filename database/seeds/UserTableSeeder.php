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
        $users=array("name"=>"Admin","email"=>"admin@template.com","password"=>"$2a$10$1.89najTt7JN5YIyx2rwiOQMOQ5o0/HnadMk6eK6Eh25aGCZZDhli");

        DB::table('users')->insert( $users );

    }
}
