<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourceFundsTable extends Migration {


	public function up()
	{
		Schema::create('source_funds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->nullable();
			$table->string('year', 50)->nullable();
			$table->double('amount', 30, 2 )->nullable();
			$table->integer('subscriber_id')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('source_funds');
		
	}

}
