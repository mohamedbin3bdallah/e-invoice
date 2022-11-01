<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->string('mobile');
            $table->string('landline')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->integer('company_type_id');
            $table->tinyInteger('active')->default(1);
            $table->date('subscribtion_end_date')->nullable();
            $table->timestamps();

            $table->index('country_id');
            $table->index('city_id');
            $table->index('company_type_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
