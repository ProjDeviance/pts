<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherDetailsTable extends Migration {

	public function up()
	{
		Schema::create('otherdetails', function($table)
		{
			$table->increments('id');
			$table->string('label', 45)->nullable();
			$table->integer('section_id')->references('id')->on('section')->nullable();
			$table->integer('subscriber_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('otherDetails');
	}

}
