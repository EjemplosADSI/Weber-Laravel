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
        Schema::create('subsidiary', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('busine_id')->index('fk_sucursal_empresa1_idx');
            $table->string('name', 80);
            $table->unsignedInteger('administrator_id')->index('fk_sucursal_usuarios1_idx');
            $table->string('direction', 80);
            $table->unsignedBigInteger('town_id')->index('fk_sucursal_municipios1_idx');
            $table->unsignedBigInteger('phone');
            $table->enum('type', ['Principal', 'Subsede']);
            $table->enum('status', ['Activo', 'Inactivo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsidiary');
    }
};
