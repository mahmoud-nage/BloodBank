<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('phone');
			$table->date('date_of_birth');
			$table->string('password');
			$table->string('e_mail');
			$table->date('last_donation_date');
			$table->string('pin_code')->nullable();
			$table->string('api_token',60)->nullable()->unique();
			$table->integer('blood_type_id')->unsigned()->nullable();
			$table->integer('city_id')->unsigned()->nullable();
			$table->boolean('status')->default(1);
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}
