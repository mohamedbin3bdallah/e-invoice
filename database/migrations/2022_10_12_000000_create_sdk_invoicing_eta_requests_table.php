<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdkInvoicingEtaRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdk_invoicing_eta_requests', function (Blueprint $table) {
            $table->increments('id');
			$table->foreignId('user_id')->constrained('users');
			$table->string('invoice_api_name',191);
			$table->string('function_name',191);
			$table->string('method',191);
			$table->text('header');
			$table->text('url');
			$table->text('params')->nullable();
			$table->boolean('send')->default('0');
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
        Schema::dropIfExists('sdk_invoicing_eta_requests');
    }
}
