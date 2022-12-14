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
            $table->comment('');
            $table->integer('id')->primary();
            $table->date('date');
            $table->text('observations');
            $table->unsignedInteger('employee_id')->index('fk_devoluciones_usuarios1_idx');
            $table->double('amount');
            $table->unsignedInteger('detail_purchase_id')->index('fk_devoluciones_detalle_compra1_idx');
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
