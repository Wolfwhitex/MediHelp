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
        Schema::create('konsultan', function (Blueprint $table) {
            // $table->string('KonsultanID')->primary();
            $table->id();
            $table->string('Nama');
            $table->string('Spesialisasi');
            $table->string('NoTelepon');
            $table->string('Email');
            $table->string('Alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultan');
    }
};
