<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEinvoiceRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('einvoice_roles', function (Blueprint $table) {
            $table->increments('id');
			$table->string('type',191);
			$table->string('name_en',191);
			$table->string('name_ar',191);
			$table->boolean('status')->default(0);
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
        Schema::dropIfExists('einvoice_roles');
    }
}
