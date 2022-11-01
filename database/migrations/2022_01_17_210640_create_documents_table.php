<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('internal_id',400);
            $table->string('reference_id',400);
            $table->string('issuer_type',200);
            $table->string('submitter_id',30);
            $table->string('submitter_name',200);
            $table->string('submitter_address_branch_id',100);
            $table->string('submitter_address_country',50);
            $table->string('submitter_address_governate',50);
            $table->string('submitter_address_city_region',100);
            $table->string('submitter_address_street1',200);
            $table->string('submitter_address_building_number',100);
            $table->string('submitter_address_postal_code',30)->nullable();
            $table->string('submitter_address_floor',100)->nullable();
            $table->string('submitter_address_room',100)->nullable();
            $table->string('submitter_address_landmark',500)->nullable();
            $table->string('submitter_address_additional_information',500)->nullable();
            $table->string('recipient_type',200);
            $table->string('recipient_id',30)->nullable()->comment("This Field mandatory in case of (B/F) and Optional in case of (P) if the total amount of the invoice is below threshold (50000 L.E)");
            $table->string('recipient_name',200)->nullable()->comment("This Field mandatory in case of (B/F) and Optional in case of (P) if the total amount of the invoice is below threshold (50000 L.E)");
            $table->string('recipient_address_country',50)->nullable()->comment("This Field mandatory in case of (B/F) and Optional in case of (P) if the total amount of the invoice is below threshold (50000 L.E)");
            $table->string('recipient_address_governate',100)->nullable()->comment("This Field mandatory in case of (B/F) and Optional in case of (P) if the total amount of the invoice is below threshold (50000 L.E)");
            $table->string('recipient_address_city_region',100)->nullable()->comment("This Field mandatory in case of (B/F) and Optional in case of (P) if the total amount of the invoice is below threshold (50000 L.E)");
            $table->string('recipient_address_street1',200)->nullable()->comment("This Field mandatory in case of (B/F) and Optional in case of (P) if the total amount of the invoice is below threshold (50000 L.E)");
            $table->string('recipient_address_building_number',100)->nullable()->comment("This Field mandatory in case of (B/F) and Optional in case of (P) if the total amount of the invoice is below threshold (50000 L.E)");
            $table->string('recipient_address_postal_code',30)->nullable();
            $table->string('recipient_address_floor',100)->nullable();
            $table->string('recipient_address_room',100)->nullable();
            $table->string('recipient_address_landmark',500)->nullable();
            $table->string('recipient_address_additional_information',500)->nullable();
            $table->string('document_type',20);
            $table->string('document_type_version',100);
            $table->dateTime('date_time_issued');
            $table->string('tax_payer_activity_code_string',10);
            $table->string('purchase_order_reference',100)->nullable();
            $table->text('purchase_order_description',60000)->nullable();
            $table->string('sales_order_reference',100)->nullable();
            $table->text('sales_order_description',60000)->nullable();
            $table->string('proforma_invoice_number',50)->nullable();
            $table->string('payment_bank_name',100)->nullable();
            $table->string('payment_bank_adderss',500)->nullable();
            $table->string('payment_bank_account_number',50)->nullable();
            $table->string('payment_bank_account_iban',50)->nullable();
            $table->string('payment_swift_code',50)->nullable();
            $table->text('payment_terms',60000)->nullable();
            $table->string('delivery_approach',100)->nullable();
            $table->string('delivery_packaging',100)->nullable();
            $table->dateTime('delivery_date_validity')->nullable();
            $table->string('delivery_export_port',100)->nullable();
            $table->string('delivery_country_of_origin',100)->nullable();
            $table->decimal('delivery_gross_weight',20,5)->nullable();
            $table->decimal('delivery_net_weight',20,5)->nullable();
            $table->text('delivery_terms',60000)->nullable();
            $table->decimal('total_sales_amount',20,5);
            $table->decimal('total_discount_amount',20,5);
            $table->decimal('net_amount',20,5);
            $table->decimal('extra_discount_amount',20,5);
            $table->decimal('total_items_discount_amount',20,5);
            $table->decimal('total_invoice_amount',20,5);
            $table->dateTime('internal_last_updated_date')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
