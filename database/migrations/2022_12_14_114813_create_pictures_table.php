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
        Schema::create('pictures', function (Blueprint $table) {
            $table->comment('Tabla de Imagenes');
            $table->bigIncrements('id')->unique('id_picture_UNIQUE');
            $table->string('name', 60)->unique();
            $table->text('description')->nullable()->fulltext();
            $table->string('route', 120)->unique('route_picture_UNIQUE');
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
        Schema::dropIfExists('pictures');
    }
};
