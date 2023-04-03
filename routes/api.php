<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BmiController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserWorkoutController;
use App\Http\Controllers\WorkoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::group([
    'prefix' => 'v1',
], function () {
    Route::group([
        'prefix' => 'users',
    ], function () {
        Route::get('/{userId}/workouts', [UserWorkoutController::class, 'getByUserId']);
        Route::post('/{userId}/workouts/{workoutId}', [UserWorkoutController::class, 'store']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::patch('/{id}', [UserController::class, 'update']);
    });

    Route::group([
        'prefix' => 'workouts',
    ], function () {
        Route::get('/', [WorkoutController::class, 'index']);
    });

    Route::group([
        'prefix' => 'tags',
    ], function () {
        Route::get('/', [TagController::class, 'index']);
    });

    Route::group([
        'prefix' => 'blogs',
    ], function () {
        Route::get('/', [BlogController::class, 'index']);
    });

    Route::group([
        'prefix' => 'foods',
    ], function () {
        Route::get('/', [FoodController::class, 'index']);
    });

    Route::group([
        'prefix' => 'bmi',
    ], function () {
        Route::get('/{userId}', [BmiController::class, 'index']);
        Route::post('/{userId}', [BmiController::class, 'store']);
    });

    Route::group([
        'prefix' => 'trainings',
    ], function () {
        Route::post('user/{userId}/tag/{tagId}', [TrainingController::class, 'store']);
        Route::put('/{id}', [TrainingController::class, 'update']);
        Route::patch('/{id}', [TrainingController::class, 'update']);
    });
});
