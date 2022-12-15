<?php

use App\Enums\DepartamentRegion;
use App\Enums\DepartamentStatus;
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
        Schema::create('departments', function (Blueprint $table) {
            $table->comment('Tabla de Departamentos');
            $table->bigIncrements('id')->unique('id_departament_UNIQUE');
            $table->string('name', 90)->unique('name_departament_UNIQUE')->index();
            $table->enum('region', DepartamentRegion::values());
            $table->enum('status', DepartamentStatus::values())->default(DepartamentStatus::Activo->value);
            $table->timestamps();
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
        Schema::dropIfExists('departments');
    }
};
