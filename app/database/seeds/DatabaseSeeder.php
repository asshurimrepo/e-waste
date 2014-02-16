<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('InternetsTableSeeder');
		$this->call('ServicesTableSeeder');
		$this->call('ManagementsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('TechniquesTableSeeder');
		$this->call('UserTableSeeder');
	}

}