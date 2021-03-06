<?php

use Illuminate\Database\Migrations\Migration;

class ConfideSetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(true);
            $table->timestamps();
            $table->integer('office_id')->unsigned();
            $table->string('remember_token')->default(true);
            $table->integer('subscriber_id')->nullable();
        });

        // Creates password reminders table
        Schema::create('password_reminders', function($t)
        {
            $t->string('email');
            $t->string('token');
            $t->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('password_reminders');
        Schema::drop('users');
    }

}
