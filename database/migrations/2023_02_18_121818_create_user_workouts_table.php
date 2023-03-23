<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_workouts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('workout_realtime');
            $table->integer('calo_real');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('workout_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('workout_id')->references('id')->on('workouts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_workouts');
    }
};
