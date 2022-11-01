<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_line', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id',400);
            $table->string('document_line_no',50);
            $table->string('description',500);
            $table->string('item_type',100);
            $table->string('item_code',100);
            $table->string('unit_type',30);
            $table->decimal('quantity',20,5);
            $table->string('unit_value_currency_sold',7);
            $table->decimal('unit_value_amount_egp',20,5);
            $table->decimal('unit_value_amount_sold',20,5);
            $table->decimal('unit_value_exchange_rate',8,5);
            $table->decimal('sales_total',20,5);
            $table->decimal('total',20,5);
            $table->decimal('value_difference',20,5)->nullable();
            $table->decimal('total_taxable_fees',20,5);
            $table->decimal('net_total',20,5);
            $table->decimal('items_discount',20,5)->nullable();
            $table->decimal('discount_rate',8,5)->nullable();
            $table->decimal('discount_amount',20,5)->nullable();
            $table->string('internal_code',50)->nullable();
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
        Schema::dropIfExists('document_line');
    }
}
