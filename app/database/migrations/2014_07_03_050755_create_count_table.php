<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountTable extends Migration {

	public function up()
	{
		Schema::create('count', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->references('id')->on('users')->nullable();
			$table->integer('doc_id')->references('id')->on('document')->nullable();
			$table->timestamps();
			$table->integer('subscriber_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('count');
	}

}
