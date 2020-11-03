<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('users')->insert([
	        'name' => str_random(10),
	        'email' => 'gabriel@controltransp.com',
	        'password' => bcrypt('gap14br09!'),
	        'profile_id' => 3,
	        'created_at' => date('d-m-Y H:i:s'),
	        'updated_at' => date('d-m-Y H:i:s'),
	       	'r_auth' => 1,
	    ]);
    }
}
