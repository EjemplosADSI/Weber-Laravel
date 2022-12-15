<?php

use App\Enums\CategoryStatus;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->comment('Tabla de categorias');
            $table->bigIncrements('id')->unique('id_category_UNIQUE');
            $table->string('name', 80)->unique()->index();
            $table->text('description')->nullable()->fulltext();
            $table->enum('status', CategoryStatus::values())->default(CategoryStatus::Activo->value);
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
        Schema::dropIfExists('categories');
    }
};
