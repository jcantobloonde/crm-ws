<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();
		$this->call('TypeTableSeeder');
		$this->call('CompanyTableSeeder');
		$this->call('ContactTableSeeder');
		$this->call('ThreadTableSeeder');
		$this->call('ActionTableSeeder');

		
		$this->command->info('All tables was seeded succesfully!');
	}
}