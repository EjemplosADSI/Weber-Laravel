<?php

use App\Enums\ProductStatus;
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
        Schema::create('products', function (Blueprint $table) {
            $table->comment('Tabla de productos');
            $table->bigIncrements('id')->unique('id_product_UNIQUE');
            $table->string('name', 255)->unique()->index();
            $table->unsignedDecimal('price', 10, 0);
            $table->unsignedFloat('gain_percentage', 10, 2);
            $table->unsignedMediumInteger('stock');
            $table->enum('status', ProductStatus::values())->default(ProductStatus::Activo->value);
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
        Schema::dropIfExists('products');
    }
};
