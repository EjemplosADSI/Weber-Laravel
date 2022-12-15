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
        Schema::create('menus', function (Blueprint $table) {
            $table->comment('Tabla del menu de la aplicacion');
            $table->bigIncrements('id')->unique('id_menu_UNIQUE');
            $table->unsignedBigInteger('parent_id')->nullable()->unique('parent_menu_UNIQUE')->index();
            $table->string('title', 150);
            $table->text('description')->nullable()->fulltext();
            $table->string('model', 60)->nullable();
            $table->string('route', 150)->nullable();
            $table->unsignedInteger('order');
            $table->string('icon', 80)->nullable()->default('');
            $table->tinyInteger('enabled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
