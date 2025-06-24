<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/admin', function (Request $request) {
    return response()->json(['message' => 'Welcome to the admin area!']);
})->name('admin.dashboard');


Route::get('/portfolios', function () {
    return Portfolio::all();
});