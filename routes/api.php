<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\Api\DomainApiController;

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




Route::get('unauthentication', [PassportAuthController::class, 'unauthentication'])->name('unauthentication');

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::resource('posts', PostController::class);


Route::prefix('user')->namespace('Api')->name('user.')->group(function () {
    Route::post('mycharge', [UserController::class, 'mycharge']);
    Route::get('test', [UserController::class, 'test']);
});

});



Route::namespace('Api')->name('domain.')->group(function () {
    Route::post('checkdomain', [DomainApiController::class, 'checkdomain']);
    Route::prefix('domain')->middleware('auth:api')->group(function () {
        Route::post('buy', [DomainApiController::class, 'buy']);
        Route::post('count', [DomainApiController::class, 'countdomain']);
    });
});
