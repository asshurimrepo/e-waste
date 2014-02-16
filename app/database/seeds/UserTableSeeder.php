<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('user')->truncate();

		$user = array(

		);

		// Uncomment the below to run the seeder
		// DB::table('user')->insert($user);
		User::create(['username'=>'admin', 'password'=>Hash::make('secret')]);
	}

}
