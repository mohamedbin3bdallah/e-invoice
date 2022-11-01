<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->after('subscribtion_end_date',function ($table){
                $table->string('email_notification')->nullable();
                $table->string('mobile_notification')->nullable();
                $table->integer('user_notification')->nullable();
            });

        });

        Schema::table('companies', function (Blueprint $table) {
            $table->text('erp_client_id')->nullable()->after('address');
            $table->text('erp_client_secret_1')->nullable()->after('erp_client_id');
            $table->text('erp_client_secret_2')->nullable()->after('erp_client_secret_1');
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
            $table->dropColumn('email_notification');
            $table->dropColumn('mobile_notification');
            $table->dropColumn('user_notification');
        });

        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('erp_client_id');
            $table->dropColumn('erp_client_secret_1');
            $table->dropColumn('erp_client_secret_2');
        });
    }
}
