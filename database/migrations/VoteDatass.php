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
        Schema::create('votedatas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama_user');
            $table->string('email')->unique();
            $table->string('role');
            $table->string('username');
            $table->string('kandidat_id');
            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote_data');
    }
};
