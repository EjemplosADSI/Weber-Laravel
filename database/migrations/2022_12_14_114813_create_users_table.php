<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->comment('En esta tabla se almacenaran los datos de los usuarios del sistema');
            $table->increments('id');
            $table->string('name', 60)->index();
            $table->string('last_name', 60)->index();
            $table->string('email', 90);
            $table->timestamp('email_verified_at', 45)->nullable();
            $table->string('password', 256);
            $table->string('photo', 45)->nullable();
            $table->string('gender', 45);
            $table->enum('document_type', ['C.C', 'C.E', 'T.I', 'R.C', 'Pasaporte']);
            $table->unsignedBigInteger('document')->unique('documento_UNIQUE')->index();
            $table->unsignedBigInteger('phone');
            $table->string('address', 70);
            $table->unsignedBigInteger('town_id')->index('fk_usuarios_municipios1_idx');
            $table->date('birth_date');
            $table->enum('role', ['Administrador', 'Empleado', 'Cliente', 'Proveedor']);
            $table->unsignedInteger('subsidiary_id')->index('fk_usuarios_sucursal1_idx');
            $table->enum('status', ['Activo', 'Inactivo']);
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
