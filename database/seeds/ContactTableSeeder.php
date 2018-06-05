<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create(array(
            'name' => 'Pepe',
            'surname' => 'Canto',
            'email' => 'Pepe19@gmail.com',
            'role' => 'Rol',
            'main_contact' => 1,
            'company_id' => 1,
        ));

        Contact::create(array(
            'name' => 'Jose',
            'surname' => 'Jimenez',
            'email' => 'josejimenez@gmail.com',
            'role' => 'Rol',
            'main_contact' => 0,
            'company_id' => 1,
        ));

        Contact::create(array(
            'name' => 'Laura',
            'surname' => 'Garcia',
            'email' => 'laugar@gmail.com',
            'role' => 'Rol',
            'main_contact' => 1,
            'company_id' => 3,
        ));
    }
}
