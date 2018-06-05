<?php

use Illuminate\Database\Seeder;
use App\Type;
class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(array(
            'name' => 'Contacto web',
        ));

        Type::create(array(
            'name' => 'Email',
        ));

        Type::create(array(
            'name' => 'Evento',
        ));

        Type::create(array(
            'name' => 'Mensaje Linkedin',
        ));

        Type::create(array(
            'name' => 'Mensaje Facebook',
        ));

        Type::create(array(
            'name' => 'Mensaje Twitter',
        ));

        Type::create(array(
            'name' => 'Contacto Personal',
        ));

        Type::create(array(
            'name' => 'Referencia',
        ));

        Type::create(array(
            'name' => 'Dossier',
        ));

        Type::create(array(
            'name' => 'Presupuesto',
        ));

        Type::create(array(
            'name' => 'Revisión Presupuesto',
        ));

        Type::create(array(
            'name' => 'Cita Presencial',
        ));

        Type::create(array(
            'name' => 'Videoconferencia',
        ));

        Type::create(array(
            'name' => 'Respuesta',
        ));
    }
}
