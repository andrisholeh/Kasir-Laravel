<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('finance_income', function (Blueprint $table) {
            $table->id();
            $table->string('sumber')->nullable(); // contoh: 'penjualan', 'lainnya'
            $table->foreignId('sales_id')->nullable()->constrained('sales')->nullOnDelete();
            $table->decimal('nominal', 15, 2)->default(0);
            $table->dateTime('tanggal')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('finance_income');
    }
};
