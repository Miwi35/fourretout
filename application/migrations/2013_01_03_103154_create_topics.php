<?php

class Create_Topics {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('topics', function($table) {
			$table->engine = 'InnoDB';
			
            $table->increments('id');
            $table->integer('board_id')->unsigned();
            $table->string('title', 64);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('board_id')->references('id')->on('boards');
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
		Schema::drop('topics');
	}

}