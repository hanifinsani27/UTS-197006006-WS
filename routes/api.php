<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/3/search/tv', [\App\Http\Controllers\WrapperController::class, 'searchtv'])->name('searchtv');
Route::get('/3/search/movie', [\App\Http\Controllers\WrapperController::class, 'searchmovie'])->name('searchmovie');
Route::get('/3/genre/movie/list', [\App\Http\Controllers\WrapperController::class, 'genremovie'])->name('genremovie');
Route::get('/3/configuration/languages', [\App\Http\Controllers\WrapperController::class, 'language'])->name('searchmovie');
Route::get('/3/movie/589712', [\App\Http\Controllers\WrapperController::class, 'detailmovie'])->name('detailmovie');
Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006006',
            'nama'=>'Muhammad Hanif Insani',
            'email'=>'197006006@student'
        ]
        ];
    })-> middleware('npm');
