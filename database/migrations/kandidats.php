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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama_kandidat');
            $table->text('tentang_kandidat');
            $table->string('prodi_Kandidat');
            $table->text('visi_kandidat');
            $table->text('misi_kandidat');
            $table->string('link_foto_kandidat')->nullable();
            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
