<?php

class Create_Posts {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('posts', function($table) {
			$table->engine = 'InnoDB';
			
            $table->increments('id');
            $table->integer('topic_id')->nullable()->unsigned();
            $table->integer('post_id')->nullable()->unsigned();
            $table->string('title', 64);
            $table->text('content');
            $table->boolean('forked')->default(false);

            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('post_id')->references('id')->on('posts');

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
		Schema::drop('posts');
	}

}