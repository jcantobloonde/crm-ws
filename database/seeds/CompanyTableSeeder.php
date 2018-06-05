<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create(array(
            'name' => 'Bloonde',
        ));

        Company::create(array(
            'name' => 'Paco Bazan',
        ));

        Company::create(array(
            'name' => 'Pepito SL',
        ));
    }
}
