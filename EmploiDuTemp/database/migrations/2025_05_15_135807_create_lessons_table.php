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
        Schema::create('lessons', function (Blueprint $table) {
             $table->id('lesson_id');
            $table->foreignId('schedule_id')->constrained('schedules', 'schedule_id')->onDelete('cascade');
            $table->foreignId('module_id')->constrained('modules', 'module_id');
            $table->foreignId('room_id')->constrained('rooms', 'room_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->date('lesson_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('day_of_week', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
