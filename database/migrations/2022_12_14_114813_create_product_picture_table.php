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
        Schema::create('product_picture', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('picture_id')->index('fk_productos_has_fotos_fotos1_idx');
            $table->unsignedInteger('product_id')->index('fk_productos_has_fotos_productos1_idx');
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
        Schema::dropIfExists('product_picture');
    }
};
