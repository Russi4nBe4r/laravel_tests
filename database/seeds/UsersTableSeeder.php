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
	    	'name' => 'test',
		'email' => 'test@test.test',
		'password' => Hash::make('testtest'),
	       	'event_token' => Hash::make('testtesttest'),	
	    ]);
    }
}
