<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotInternetServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('internet_service', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('internet_id')->unsigned()->index();
			$table->integer('service_id')->unsigned()->index();
			$table->foreign('internet_id')->references('id')->on('internets')->onDelete('cascade');
			$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('internet_service');
	}

}
