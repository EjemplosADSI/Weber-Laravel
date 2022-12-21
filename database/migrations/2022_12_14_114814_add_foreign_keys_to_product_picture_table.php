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
        Schema::table('product_pictures', function (Blueprint $table) {
            $table->foreign(['picture_id'], 'fk_productos_has_fotos_fotos1')->references(['id'])->on('pictures')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['product_id'], 'fk_productos_has_fotos_productos1')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_pictures', function (Blueprint $table) {
            $table->dropForeign('fk_productos_has_fotos_fotos1');
            $table->dropForeign('fk_productos_has_fotos_productos1');
        });
    }
};
