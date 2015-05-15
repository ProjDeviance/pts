<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration {

	public function up()
	{
		Schema::create('offices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('officeName', 100)->nullable();
			$table->integer('subscriber_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('offices');
	}

}
