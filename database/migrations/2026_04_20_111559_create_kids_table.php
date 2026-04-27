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
        Schema::create('kids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->enum('gender',['female','male']);
            $table->date('birth_date');
            $table->float('height');
            $table->float('weight');
            $table->enum('blood_type',['A+','O+','B+','AB+','A-','O-','B-','AB-']);
            $table->boolean('has_special_case')->default(false);
            $table->text('special_case_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kids');
    }
};
