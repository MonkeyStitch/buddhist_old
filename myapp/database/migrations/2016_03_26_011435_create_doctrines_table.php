<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctrinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctrines', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_name');
			$table->text('details');
			$table->string('picture');
			$table->integer('authors_id')->unsigned();
			$table->foreign('authors_id')->references('id')->on('authors');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('doctrines');
	}

}
