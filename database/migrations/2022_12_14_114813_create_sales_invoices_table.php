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
            $table->comment('Tabla de facturas de venta');
            $table->bigIncrements('id')->unique('id_sales_invoice_UNIQUE');
            $table->decimal('amount', 12, 2);
            $table->decimal('price', 12, 2);
            $table->unsignedBigInteger('invoice_id')->index('fk_detalle_compra_factura1_idx');
            $table->unsignedBigInteger('purchase_invoice_id')->index('fk_detalle_compra_detalle_factura1_idx');
            $table->timestampsTz();
            $table->softDeletes();
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
