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
        Schema::create('returns', function (Blueprint $table) {
            $table->comment('Tabla de devoluciones');
            $table->bigIncrements('id')->unique('id_return_UNIQUE');
            $table->timestampTz('date')->useCurrent()->useCurrentOnUpdate();
            $table->text('description')->fulltext();
            $table->unsignedBigInteger('employee_id')->index('fk_devoluciones_usuarios1_idx');
            $table->unsignedDecimal('amount', 12, 2);
            $table->unsignedBigInteger('detail_purchase_id')->index('fk_devoluciones_detalle_compra1_idx');
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
        Schema::dropIfExists('returns');
    }
};
