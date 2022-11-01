<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_status', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id',400);
            $table->string('document_uuid',30);
            $table->string('submission_id',30);
            $table->text('processing_result',60000);
            $table->string('document_status',30);
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
        Schema::dropIfExists('document_status');
    }
}
