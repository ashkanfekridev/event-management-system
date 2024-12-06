<?php

use App\Http\Controllers\Admin\ArtistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/test-me", function () {
    return 'Hello from Laravel!';
});


Route::get('admin/dashboard', function () {
    return response([
        'artists' => 10,
        'events' => 28,
        'tickets' => 450,

    ]);
});


Route::apiResource('admin/artists', ArtistController::class);



