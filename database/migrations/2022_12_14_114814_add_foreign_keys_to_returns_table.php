<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('refunds', function (Blueprint $table) {
            $table->foreign(['detail_purchase_id'], 'fk_devoluciones_detalle_compra1')->references(['id'])->on('sales_invoices')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['employee_id'], 'fk_devoluciones_usuarios1')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('refunds', function (Blueprint $table) {
            $table->dropForeign('fk_devoluciones_detalle_compra1');
            $table->dropForeign('fk_devoluciones_usuarios1');
        });
    }
};
