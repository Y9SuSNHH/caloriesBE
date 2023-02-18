<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tag_workout', function (Blueprint $table) {
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('workout_id');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('workout_id')->references('id')->on('workouts');
            $table->unique(['tag_id', 'workout_id'], 'tag_workout_uk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_workouts');
    }
};
