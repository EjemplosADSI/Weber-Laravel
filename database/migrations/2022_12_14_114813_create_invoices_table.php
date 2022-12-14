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
        Schema::create('invoices', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('number', 244);
            $table->unsignedInteger('user_id')->index('fk_ventas_Usuarios1_idx')->comment('Puede ser cliente en caso de venta o proveedor en caso de compra');
            $table->unsignedInteger('employee_id')->index('fk_ventas_Usuarios2_idx');
            $table->dateTime('date');
            $table->double('amout');
            $table->enum('type', ['Venta', 'Compra']);
            $table->enum('status', ['En progreso', 'Cancelada', 'Finalizada']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
