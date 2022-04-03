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

Route::get('/media/:media-id/comments', [\App\Http\Controllers\WrapperApiController::class, 'Getalistofrecentcomments'])->name('Getalistofrecentcomments');
Route::get('/media/:media-id', [\App\Http\Controllers\WrapperApiController::class, 'Getinformationaboutamedia'])->name('Getinformationaboutamedia');
Route::get('/media/popular', [\App\Http\Controllers\WrapperApiController::class, 'Getalistofcurrentlypopularmedia'])->name('Getalistofcurrentlypopularmedia');
Route::get('/media/search?lat=<number>&lng=<number>&min_timestamp=<integer>&max_timestamp=<integer>&distance=<integer>', [\App\Http\Controllers\WrapperApiController::class, 'Searchformediainagivenarea'])->name('Searchformediainagivenarea');
Route::get('/media/shortcode/:shortcode', [\App\Http\Controllers\WrapperApiController::class, 'shortcode'])
    ->middleware( \App\Http\Middleware\NpmMiddleware::class)
    ->name('shortcode');

Route::get('/user/identitas', function(){
    return[
        'code' => '0',
        'data' => [
            'npm' => '187006003',
            'nama' => 'Nadindra Hasya Maharani',
            'email' => 'nadindra@gmail.com',
        ]
        ];
})->middleware('npm');