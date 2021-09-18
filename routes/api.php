<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\API\MahasiswaController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;

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

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('mahasiswa', MahasiswaController::class);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('mahasiswa',[MahasiswaController::class,'index']);
// Route::post('mahasiswa',[MahasiswaController::class,'create']);
// Route::put('/mahasiswa/{id}',[MahasiswaController::class,'update']);
// Route::delete('mahasiswa/{id}',[MahasiswaController::class,'delete']);



