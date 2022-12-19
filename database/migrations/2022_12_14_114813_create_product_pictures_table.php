<?php

use App\Enums\ProductPictureStatus;
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
        Schema::create('product_pictures', function (Blueprint $table) {
            $table->comment('Tabla de imagenes de productos');
            $table->bigIncrements('id')->unique('id_product_pictures_UNIQUE');
            $table->unsignedBigInteger('picture_id')->index('fk_productos_has_fotos_fotos1_idx');
            $table->unsignedBigInteger('product_id')->index('fk_productos_has_fotos_productos1_idx');
            $table->enum('status', ProductPictureStatus::values())->default(ProductPictureStatus::Activo->value);
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
        Schema::dropIfExists('product_pictures');
    }
};
