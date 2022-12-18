<?php

use App\Enums\UserDocumentType;
use App\Enums\UserGender;
use App\Enums\UserRole;
use App\Enums\UserStatus;
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
            $table->bigIncrements('id')->unique('id_user_UNIQUE');
            $table->string('name', 60)->index();
            $table->string('last_name', 60)->index();
            $table->string('email', 90)->unique();
            $table->timestampTz('email_verified_at')->nullable();
            $table->string('password', 256)->nullable();
            $table->string('photo', 200)->nullable()->default('default_user.jpg');
            $table->enum('gender', UserGender::values())->nullable()->default(UserGender::MASCULINO->value);
            $table->enum('document_type', UserDocumentType::values())->default(UserDocumentType::CC->value);
            $table->unsignedBigInteger('document')->unique('documento_UNIQUE')->index();
            $table->unsignedBigInteger('phone')->nullable();
            $table->string('address', 70)->nullable();
            $table->unsignedBigInteger('town_id')->index('fk_usuarios_municipios1_idx');
            $table->date('birth_date')->nullable();
            $table->enum('role', UserRole::values())->default(UserRole::Cliente->value);
            $table->unsignedBigInteger('subsidiary_id')->nullable()->index('fk_usuarios_sucursal1_idx');
            $table->enum('status', UserStatus::values())->default(UserStatus::Activo->value);
            $table->softDeletes();
            $table->rememberToken();
            $table->timestampsTz();

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
