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
            $table->foreignId('id_admin')->constrained('users');
            $table->foreignId('id_penggalang')->constrained('users');
            $table->string('title');
            $table->text('deskripsi');
            $table->bigInteger('target_dana');
            $table->string('gambar');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

           
        });
        /**user */
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kampanye');
    }
};
