<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThreadsTable extends Migration {

	public function up()
	{
		Schema::create('threads', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->text('description');
			$table->boolean('status');
			$table->string('interest', 255);
			$table->string('source', 255);
			$table->datetime('created_at');
			$table->datetime('updated_at');
			$table->integer('contact_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('threads');
	}
}