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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
             $table->string('firstname', 100);
            $table->string('lastname', 100);
           
            // phone number
            $table->string('phone', 20);
            $table->string('email', 100);
            // quantity
            $table->integer('quantity');
            // ticket type enum (vip, medium, festival)
            $table->enum('type', ['vip', 'medium', 'festival'])->default('medium');
            // date
            $table->date('date');

            // ticket status enum (valid, used)
            $table->enum('status', ['valid', 'used'])->default('valid');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
