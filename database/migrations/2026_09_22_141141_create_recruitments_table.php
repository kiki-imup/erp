<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();

            $table->string('candidate_name');
            $table->string('email');
            $table->string('phone_number');

            $table->foreignId('position_id')
                ->constrained('positions')
                ->cascadeOnDelete();

            $table->date('application_date');

            $table->enum('status', [
                'applied',
                'interview',
                'accepted',
                'rejected',
            ])->default('applied');

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recruitments');
    }
};