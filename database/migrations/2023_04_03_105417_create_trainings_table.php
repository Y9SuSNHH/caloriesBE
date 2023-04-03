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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('workout_id');
             $table->unsignedBigInteger('tag_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('workout_id')->references('id')->on('workouts');
             $table->foreign('tag_id')->references('id')->on('tags');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_trainings');
    }
};
