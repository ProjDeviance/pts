<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcribersTable extends Migration {

	public function up()
	{
		Schema::create('subscribers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('due_date');
			$table->integer('status')->nullable();
			$table->string('firstname', 50)->nullable();
			$table->string('lastname', 50)->nullable();
			$table->string('municipality', 50)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('contact_no', 50)->nullable();
			$table->integer('rank')->nullable();
			$table->integer('user_id')->nullable();
			$table->timestamps();
			
		});
	}

	public function down()
	{
		Schema::drop('subscribers');
		
	}

}
