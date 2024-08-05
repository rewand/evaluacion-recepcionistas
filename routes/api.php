<?php
use App\Http\Controllers\AuthController;

Route::prefix('v1')->group(function () {
    // Rutas para Recepcionista
    Route::resource('recepcionistas', 'Api\V1\RecepcionistaController');
    Route::post('recepcionistas/{id}', 'Api\V1\RecepcionistaController@update');
    Route::delete('recepcionistas/{id}', 'Api\V1\RecepcionistaController@destroy');

    // Rutas para Evaluacion
    Route::resource('evaluaciones', 'Api\V1\EvaluacionController');
    Route::post('evaluaciones/{id}', 'Api\V1\EvaluacionController@update');
    Route::delete('evaluaciones/{id}', 'Api\V1\EvaluacionController@destroy');
});

// Rutas de autenticación
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('user', [AuthController::class, 'user']);

