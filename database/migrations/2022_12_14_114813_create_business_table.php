<?php

use App\Enums\BusineStatus;
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
        Schema::create('business', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id')->unique('idempresa_UNIQUE');
            $table->string('name', 80)->index();
            $table->unsignedInteger('nit')->unique('nit_UNIQUE');
            $table->enum('status', BusineStatus::cases())->default(BusineStatus::Activo);
            $table->primary(['id']);
            $table->timestamps();
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
        Schema::dropIfExists('business');
    }
};
