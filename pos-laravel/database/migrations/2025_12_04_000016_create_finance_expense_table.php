<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('finance_expense', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->nullable(); // operasional, gaji, beli stok, dll
            $table->text('deskripsi')->nullable();
            $table->decimal('nominal', 15, 2)->default(0);
            $table->dateTime('tanggal')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete(); // yang input
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('finance_expense');
    }
};
