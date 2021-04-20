<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

// Route::get('/categories', [CategoryController::class, 'index'])->name('all_categories');
// Route::post('/categories', [CategoryController::class, 'store'])->name('create_category');
// Route::get('/category/{category}', [CategoryController::class, 'show'])->name('show_category');
// Route::patch('/category/{category}', [CategoryController::class, 'update'])->name('update_category');
// Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('destroy_category');
Route::apiResource('category', CategoryController::class);
Route::apiResource('product', ProductController::class);
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/product/search/{name}', [ProductController::class, 'search']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
