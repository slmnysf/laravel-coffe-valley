<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('daily_beans', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->foreignId('bean_id')->constrained('beans')->onDelete('cascade'); // Foreign key ke tabel beans
            $table->decimal('sale_price', 8, 2); // Harga jual (misal: 11.00)
            $table->date('date'); // Tanggal (misal: 2025-01-27)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('daily_beans');
    }
};
