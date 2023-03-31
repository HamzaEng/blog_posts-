<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\BlogController;
use Faker\Core\Blood;

// GET 
/* Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/about', [BlogController::class, 'about']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

// POST 
Route::get('/blog/create', [BlogController::class, 'Page']);
Route::post('/blog', [BlogController::class, 'store']);

// PUT || PATCH 
Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
Route::patch('/blog/{id}', [BlogController::class, 'update']);

//DELETE 
Route::delete('/blog/{id}', [BlogController::class, 'destroy']);


 */
Route::get('/blog/about', [BlogController::class, 'about']);
Route::resource('/blog', BlogController::class);
Route::get('/', [BlogController::class, 'index']);
