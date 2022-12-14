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
            $table->comment('');
            $table->bigIncrements('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('title', 150);
            $table->string('description', 45)->nullable();
            $table->string('model', 60)->nullable();
            $table->string('route', 150)->nullable();
            $table->unsignedSmallInteger('order');
            $table->string('icon', 45)->nullable();
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
