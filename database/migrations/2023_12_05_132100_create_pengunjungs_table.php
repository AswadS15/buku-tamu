<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_divisi')->default(0);
            $table->foreign('id_divisi')->references('id')->on('pengunjungs')->onDelete('cascade');
            $table->string('nama');
            $table->string('instansi')->nullable();
            $table->string('alamat')->nullable();
            $table->string('hp');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengunjungs');
    }
};
