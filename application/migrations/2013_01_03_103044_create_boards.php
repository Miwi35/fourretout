<?php

class Create_Boards {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('boards', function($table) {
			$table->engine = 'InnoDB';
			
            $table->increments('id');
            $table->string('title', 64);
            $table->text('description')->nullable();
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
		Schema::drop('boards');
	}

}