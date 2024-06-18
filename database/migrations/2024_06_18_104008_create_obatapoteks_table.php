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
        Schema::create('obatapoteks', function (Blueprint $table) {
            $table->id();
            $table->string('ApotekID')->constrained()->cascadeOnDelete();
            $table->string('Namaobat');
            $table->integer('Hargaobat');
            $table->integer('Stokobat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obatapotek');
    }
};
