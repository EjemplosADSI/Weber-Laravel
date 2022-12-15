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
        Schema::create('purchase_invoices', function (Blueprint $table) {
            $table->comment('Tabla de facturas de compra');
            $table->bigIncrements('id')->unique('id_purchase_invoice_UNIQUE');
            $table->unsignedBigInteger('invoice_id')->index('fk_detalle_ventas_ventas1_idx');
            $table->unsignedBigInteger('producto_id')->index('fk_detalle_ventas_productos1_idx');
            $table->unsignedInteger('lote')->nullable();
            $table->date('expiration_date')->nullable();
            $table->unsignedDecimal('amount', 12, 2);
            $table->unsignedDecimal('price', 12, 2);
            $table->timestamps();
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
        Schema::dropIfExists('purchase_invoices');
    }
};
