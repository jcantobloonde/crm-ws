<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('contacts', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('actions', function(Blueprint $table) {
			$table->foreign('type_id')->references('id')->on('types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('actions', function(Blueprint $table) {
			$table->foreign('thread_id')->references('id')->on('threads')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('threads', function(Blueprint $table) {
			$table->foreign('contact_id')->references('id')->on('contacts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('contacts', function(Blueprint $table) {
			$table->dropForeign('contacts_company_id_foreign');
		});
		Schema::table('actions', function(Blueprint $table) {
			$table->dropForeign('actions_type_id_foreign');
		});
		Schema::table('actions', function(Blueprint $table) {
			$table->dropForeign('actions_thread_id_foreign');
		});
		Schema::table('threads', function(Blueprint $table) {
			$table->dropForeign('threads_contact_id_foreign');
		});
	}
}