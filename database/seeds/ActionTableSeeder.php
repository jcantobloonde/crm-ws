<?php

use Illuminate\Database\Seeder;
use App\Action;

class ActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Action::create(array(
            'name' => 'Accion 1',
            'description' => 'Descripcion Accion 1',
            'result' => 'Resultado Accion 1',
            'issue' => 'Issue Accion 1',
            'observations' => 'Observation 1',
            'thread_id' => '1',
            'type_id' => '1',
        ));

        Action::create(array(
            'name' => 'Accion 2',
            'description' => 'Descripcion Accion 2',
            'result' => 'Resultado Accion 2',
            'issue' => 'Issue Accion 2',
            'observations' => 'Observation 2',
            'thread_id' => '2',
            'type_id' => '2',
        ));

        Action::create(array(
            'name' => 'Accion 3',
            'description' => 'Descripcion Accion 3',
            'result' => 'Resultado Accion 3',
            'issue' => 'Issue Accion 3',
            'observations' => 'Observation 3',
            'thread_id' => '3',
            'type_id' => '4',
        ));
       
    }
}
