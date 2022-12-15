<?php

use App\Enums\InvoiceStatus;
use App\Enums\InvoiceType;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->comment('Tabla de facturas');
            $table->bigIncrements('id')->unique('id_invoice_UNIQUE');
            $table->string('number', 244)->unique()->index();
            $table->unsignedBigInteger('user_id')->index()->comment('Puede ser cliente en caso de venta o proveedor en caso de compra');
            $table->unsignedBigInteger('employee_id')->index();
            $table->timestampTz('date')->useCurrent()->useCurrentOnUpdate();
            $table->decimal('amount', 12, 2);
            $table->enum('type', InvoiceType::values())->default(InvoiceType::Venta->value);
            $table->enum('status', InvoiceStatus::values())->default(InvoiceStatus::Progreso->value);
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
        Schema::dropIfExists('invoices');
    }
};
