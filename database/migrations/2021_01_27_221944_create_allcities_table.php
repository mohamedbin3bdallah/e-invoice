<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAllcitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('cities');

        if(!Schema::hasTable('cities')){
			Schema::create('cities', function(Blueprint $table)
			{
				$table->integer('id', true);
				$table->string('name', 255);
				$table->integer('state_id');
				$table->integer('pincode')->nullable();
				$table->dateTime('updated_at')->nullable();
			});
		}
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cities');
	}

}
