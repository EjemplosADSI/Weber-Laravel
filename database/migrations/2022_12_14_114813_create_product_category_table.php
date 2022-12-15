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
        Schema::create('product_category', function (Blueprint $table) {
            $table->comment('Tabla de productos que pertenecen a una categoria');
            $table->unsignedBigInteger('product_id')->index('fk_productos_has_categorias_productos1_idx');
            $table->unsignedBigInteger('category_id')->index('fk_productos_has_categorias_categorias1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_category');
    }
};
