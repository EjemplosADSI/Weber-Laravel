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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign(['town_id'], 'fk_usuarios_municipios1')->references(['id'])->on('towns')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['subsidiary_id'], 'fk_usuarios_sucursal1')->references(['id'])->on('subsidiaries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('fk_usuarios_municipios1');
            $table->dropForeign('fk_usuarios_sucursal1');
        });
    }
};
