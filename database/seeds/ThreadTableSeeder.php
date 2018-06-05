<?php

use Illuminate\Database\Seeder;
use App\Thread;

class ThreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thread::create(array(
            'name' => 'Hilo 1',
            'description' => 'Descripcion Hilo 1',
            'status' => 1,
            'interest' => 'Interes Hilo 1',
            'source' => 'Fuente Hilo 1',
            'contact_id' => 1,
        ));

        Thread::create(array(
            'name' => 'Hilo 2',
            'description' => 'Descripcion Hilo 2',
            'status' => 0,
            'interest' => 'Interes Hilo 2',
            'source' => 'Fuente Hilo 2',
            'contact_id' => 2,
        ));

        Thread::create(array(
            'name' => 'Hilo 3',
            'description' => 'Descripcion Hilo 3',
            'status' => 1,
            'interest' => 'Interes Hilo 3',
            'source' => 'Fuente Hilo 3',
            'contact_id' => 3,
        ));
    }
}
