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
        Schema::table('subsidiary', function (Blueprint $table) {
            $table->foreign(['busine_id'], 'fk_sucursal_empresa1')->references(['id'])->on('business')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['town_id'], 'fk_sucursal_municipios1')->references(['id'])->on('towns')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['administrator_id'], 'fk_sucursal_usuarios1')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subsidiary', function (Blueprint $table) {
            $table->dropForeign('fk_sucursal_empresa1');
            $table->dropForeign('fk_sucursal_municipios1');
            $table->dropForeign('fk_sucursal_usuarios1');
        });
    }
};
