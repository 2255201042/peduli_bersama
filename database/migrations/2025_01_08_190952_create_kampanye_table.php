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
        Schema::create('kampanye', function (Blueprint $table) {

    
            $table->id();
            $table->string('id_admin')->nullable();
            $table->string('id_penggalang');
            $table->string('title');
            $table->string('deskripsi');
            $table->string('target_dana');
            $table->string('gambar');
            $table->string('f_ktp');
            $table->string('lampiran');
            $table->string('perposal')->nullable();
            $table->string('status');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kampanye');
    }
};
