<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Tipo_IdentificacionController;
use App\Http\Controllers\Api\TipoIdentificacionController;
use App\Http\Controllers\Api\UserController;

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


Route::post('register',[RegisterController::class,'store'])->name('api.v1.register');
Route::apiResource('tipo_identificacion',TipoIdentificacionController::class)->names('api.v1.tipo_identificacion');
Route::apiResource('categorias',CategoriaController::class)->names('api.v1.categorias');
Route::apiResource('users',UserController::class)->names('api.v1.users');
Route::apiResource('blogs',BlogController::class)->names('api.v1.blogs');
Route::apiResource('products',ProductoController::class)->names('api.v1.products');