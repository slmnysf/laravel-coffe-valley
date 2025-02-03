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
        Schema::create('beans', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('name'); // Nama biji kopi
            $table->text('description'); // Deskripsi biji kopi
            $table->decimal('price'); // Harga biji kopi per unit
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('beans');
    }
};
