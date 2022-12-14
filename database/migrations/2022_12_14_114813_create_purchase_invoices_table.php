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
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('invoice_id')->index('fk_detalle_ventas_ventas1_idx');
            $table->unsignedInteger('producto_id')->index('fk_detalle_ventas_productos1_idx');
            $table->unsignedInteger('batch')->nullable();
            $table->date('expiration_date')->nullable();
            $table->unsignedInteger('amount');
            $table->double('price');
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
