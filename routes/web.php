<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecommendationController;  

Route::get('/recommendation', function () {
    return view('recommendation');
}); 

Route::post('/recommend', [RecommendationController::class, 'recommend']);

Route::get('/', function () {
    return view('welcome');
});
