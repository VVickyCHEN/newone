<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	
	public function run(){
		DB::table('users')->insert([

			'name' => rand(0,999),
			'email' => rand(0,999).'@qq.com',
			'password' => bcrypt('secret'),
		]);
	}
}