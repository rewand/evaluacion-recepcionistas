<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\RecepcionistaController;
use App\Http\Controllers\Api\V1\EvaluacionController;

Route::prefix('v1')->group(function () {
    // Rutas para Recepcionista
    Route::resource('recepcionistas', 'Api\V1\RecepcionistaController');
    Route::post('recepcionistas/{id}', 'Api\V1\RecepcionistaController@update');
    Route::delete('recepcionistas/{id}', 'Api\V1\RecepcionistaController@destroy');

    // Rutas para Evaluacion

    Route::resource('evaluaciones', 'Api\V1\EvaluacionController');

    // Métodos específicos adicionales si es necesario
    Route::post('evaluaciones/{id}', [EvaluacionController::class, 'update']);
    Route::delete('evaluaciones/{id}', [EvaluacionController::class, 'destroy']);
});
