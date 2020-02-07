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
        $users=array("name"=>"Braca","email"=>"uveknobelovac@yahoo.com","password"=>"Braca29x");

        DB::table('users')->insert( $users );

    }
}
