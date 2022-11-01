<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnsToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('sign_type', 191)->default('S')->after('active');
			$table->text('sign_value')->nullable()->after('sign_type');
			$table->string('identity',191)->after('sign_value');
			$table->string('street',191)->after('identity');
			$table->string('building_number',191)->after('street');
			$table->string('postal_code',191)->nullable()->after('building_number');
			$table->string('floor',191)->nullable()->after('postal_code');
			$table->string('room',191)->nullable()->after('floor');
			$table->text('landmark')->nullable()->after('room');
			$table->text('additional_information')->nullable()->after('landmark');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('sign_type');
			$table->dropColumn('sign_value');
			$table->dropColumn('identity');
			$table->dropColumn('street');
			$table->dropColumn('building_number');
			$table->dropColumn('postal_code');
			$table->dropColumn('floor');
			$table->dropColumn('room');
			$table->dropColumn('landmark');
			$table->dropColumn('additional_information');
        });
    }
}
