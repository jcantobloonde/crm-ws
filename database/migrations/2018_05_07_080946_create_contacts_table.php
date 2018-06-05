<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('surname', 255);
			$table->string('email', 255);
			$table->string('role', 255)->nullable();
			$table->boolean('main_contact');
			$table->datetime('created_at');
			$table->datetime('updated_at');
			$table->integer('company_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}