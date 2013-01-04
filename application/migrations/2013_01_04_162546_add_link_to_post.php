<?php

class Add_Link_To_Post {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('posts', function($table)
		{
		    $table->string('link');
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
		Schema::table('posts', function($table)
		{
		    $table->drop_column('link');
		});
	}

}