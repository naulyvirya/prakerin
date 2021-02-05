<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Api\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/indonesia', [ApiController::class, 'indonesia']);
Route::get('/positif', [ApiController::class, 'positif']);
Route::get('/sembuh', [ApiController::class, 'sembuh']);
Route::get('/meninggal', [ApiController::class, 'meninggal']);

Route::get('/provinsi', [ApiController::class, 'provinsi']);
Route::get('/provinsi/{id}', [ApiController::class, 'showProvinsi']);

Route::get('/posts', [PostsController::class, 'index']);
Route::post('/posts/store', [PostsController::class, 'store']);
Route::get('/posts/{id}', [PostsController::class, 'show']);
Route::put('/posts/update/{id}', [PostsController::class, 'update']);
Route::delete('/posts/{id?}', [PostsController::class, 'destroy']);