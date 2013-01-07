<?php

class Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table) {
			$table->engine = 'InnoDB';
			
            $table->increments('id');
            $table->string('lastname', 64);
            $table->string('name', 64);
            $table->string('nickname', 64);
            $table->string('password', 64);
            $table->string('email', 64);
            $table->text('presentation')->nullable();
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}