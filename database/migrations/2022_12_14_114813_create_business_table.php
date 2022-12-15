<?php

use App\Enums\BusineStatus;
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
        Schema::create('business', function (Blueprint $table) {
            $table->comment('Tabla empresas');
            $table->bigIncrements('id')->unique('id_bussiness_UNIQUE');
            $table->string('name', 80)->index();
            $table->unsignedInteger('nit')->unique('nit_bussiness_UNIQUE');
            $table->enum('status', BusineStatus::values())->default(BusineStatus::Activo->value);
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
        Schema::dropIfExists('business');
    }
};
