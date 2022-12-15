<?php

use App\Enums\TownStatus;
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
        Schema::create('towns', function (Blueprint $table) {
            $table->comment('Tabla de municipios');
            $table->bigIncrements('id')->unique('id_town_UNIQUE');
            $table->string('name', 90)->index('municipios_nombre_index');
            $table->unsignedBigInteger('department_id')->index('municipios_departamento_id_index');
            $table->string('shortened', 40)->nullable();
            $table->enum('status', TownStatus::values())->default(TownStatus::Activo->value);
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
        Schema::dropIfExists('towns');
    }
};
