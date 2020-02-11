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
        $users=array("name"=>"Braca","email"=>"uveknobelovac@yahoo.com","password"=>"$2y$10$1J3YqbBBTQWJKxCVNdDmquASG46wMPiB8pDMX1O5n/1XwsST38tWG");

        DB::table('users')->insert( $users );

    }
}
