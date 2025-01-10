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
        Schema::create('validasidana', function (Blueprint $table) {
            $table->id();
            $table->string('kampanye_id');
            $table->string('id_donatur');
            $table->string('username');
            $table->string('no_hp');
            $table->string('payment_amount');
            $table->timestamp('payment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasidana');
    }
};
