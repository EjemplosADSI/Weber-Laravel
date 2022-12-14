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
        Schema::table('purchase_invoices', function (Blueprint $table) {
            $table->foreign(['producto_id'], 'fk_detalle_ventas_productos1')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['invoice_id'], 'fk_detalle_ventas_ventas1')->references(['id'])->on('invoices')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchase_invoices', function (Blueprint $table) {
            $table->dropForeign('fk_detalle_ventas_productos1');
            $table->dropForeign('fk_detalle_ventas_ventas1');
        });
    }
};
