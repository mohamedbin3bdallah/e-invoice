<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCitiesStatesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('states', function (Blueprint $table) {
            $table->string('name_ar')->after('name');

        });

        Schema::table('cities', function (Blueprint $table) {
            $table->string('name_ar')->after('name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('states', function (Blueprint $table) {
            $table->dropColumn('name_ar');

        });

        Schema::table('cities', function (Blueprint $table) {
            $table->dropColumn('name_ar');

        });
    }
}
