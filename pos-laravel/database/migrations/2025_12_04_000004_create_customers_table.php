<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->enum('tipe', ['perorangan', 'bengkel', 'member']);
            $table->foreignId('price_level_id')->constrained('price_levels');
            $table->text('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->decimal('total_belanja', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
