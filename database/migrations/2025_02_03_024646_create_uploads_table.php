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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('title'); // Judul dokumen
            $table->string('document_file'); // Nama file dokumen
            $table->string('author'); // Penulis dokumen
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
};
