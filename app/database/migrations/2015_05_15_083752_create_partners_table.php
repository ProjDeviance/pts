<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration {

	
	public function up()
	{
		Schema::create('partners', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 50)->nullable();
			$table->string('contact_no', 50)->nullable();
			$table->string('business_no', 50)->nullable();

			$table->string('password', 50)->nullable();
			$table->string('Description', 100)->nullable();
			
		});
	}

	public function down()
	{
		Schema::drop('partners');
		
	}

}
