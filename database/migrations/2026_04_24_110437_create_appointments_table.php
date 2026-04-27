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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kid_id')->constrained('kids')->cascadeOnDelete();
            $table->string('doctor_name')->nullable(); 
            $table->string('specialty')->nullable();   
            $table->dateTime('appointment_date');      
            $table->string('location')->nullable();   
            $table->text('reason')->nullable();       
            $table->text('notes')->nullable();         
            $table->boolean('is_completed')->default(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
