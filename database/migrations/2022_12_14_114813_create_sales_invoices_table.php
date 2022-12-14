<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('amout');
            $table->double('price')->unsigned();
            $table->unsignedInteger('invoice_id')->index('fk_detalle_compra_factura1_idx');
            $table->unsignedInteger('purchase_invoice_id')->index('fk_detalle_compra_detalle_factura1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_invoices');
    }
};
