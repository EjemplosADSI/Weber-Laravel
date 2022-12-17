<?php

use App\Enums\SubsidiaryStatus;
use App\Enums\SubsidiaryType;
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
        Schema::create('subsidiaries', function (Blueprint $table) {
            $table->comment('Tabla de sucursales');
            $table->bigIncrements('id')->unique('id_UNIQUE');
            $table->unsignedBigInteger('business_id')->index('fk_sucursal_empresa1_idx');
            $table->string('name', 80)->unique();
            $table->unsignedBigInteger('administrator_id')->index('fk_sucursal_usuarios1_idx');
            $table->string('direction', 80)->unique();
            $table->unsignedBigInteger('town_id')->index('fk_sucursal_municipios1_idx');
            $table->unsignedBigInteger('phone')->nullable();
            $table->enum('type', SubsidiaryType::values())->default(SubsidiaryType::Principal->value);
            $table->enum('status', SubsidiaryStatus::values())->default(SubsidiaryStatus::Activo->value);
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
        Schema::dropIfExists('subsidiaries');
    }
};
