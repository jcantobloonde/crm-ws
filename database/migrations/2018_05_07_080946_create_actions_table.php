<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActionsTable extends Migration {

	public function up()
	{
		Schema::create('actions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->text('description')->nullable();
			$table->text('result');
			$table->text('issue');
			$table->text('observations');
			$table->datetime('nextDate');
			$table->datetime('created_at');
			$table->datetime('updated_at');
			$table->integer('type_id')->unsigned();
			$table->integer('thread_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('actions');
	}
}