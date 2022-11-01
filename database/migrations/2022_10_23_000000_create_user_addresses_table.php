<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->increments('id');
			$table->foreignId('user_id');
			$table->foreignId('city_id');
			$table->string('street',191);
			$table->string('building_number',191);
			$table->string('postal_code',191)->nullable();
			$table->string('floor',191)->nullable();
			$table->string('room',191)->nullable();
			$table->text('landmark')->nullable();
			$table->text('additional_information')->nullable();
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
        Schema::dropIfExists('user_addresses');
    }
}
