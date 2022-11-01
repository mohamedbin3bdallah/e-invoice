<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
			$table->text('codeType');
			$table->text('parentCode');
			$table->text('itemCode');
			$table->text('codeName');
			$table->text('codeNameAr');
			$table->text('activeFrom');
			$table->text('activeTo')->nullable();
			$table->text('description')->nullable();
			$table->text('descriptionAr')->nullable();
			$table->text('requestReason')->nullable();
			$table->text('linkedCode')->nullable();
			$table->boolean('done')->default('0');
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
        Schema::dropIfExists('items');
    }
}
