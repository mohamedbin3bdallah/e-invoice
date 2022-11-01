<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentLineTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_line_taxes', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id',400);
            $table->string('document_line_no',50);
            $table->decimal('amount',20,5);
            $table->string('tax_type',50);
            $table->string('sub_type',50)->nullable();
            $table->decimal('rate',20,5);
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
        Schema::dropIfExists('document_line_taxes');
    }
}
