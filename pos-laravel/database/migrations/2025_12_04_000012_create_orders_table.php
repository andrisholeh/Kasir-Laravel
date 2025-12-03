<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->unique();
            $table->foreignId('customer_id')->nullable()->constrained('customers');
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('total', 12, 2);
            $table->decimal('diskon', 12, 2)->default(0);
            $table->decimal('grand_total', 12, 2);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
