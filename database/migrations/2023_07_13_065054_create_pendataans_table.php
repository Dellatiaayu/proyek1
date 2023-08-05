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
        Schema::create('pendataans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dataots_id')->nullable()->constrained('data_ots')->cascadeOnDelete();
            $table->integer('pendataan_id')->unique();
            $table->string('jenis');
            $table->string('tgl_dtg');
            $table->string('kiriman');
            $table->string('alasan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendataans');
    }
};
