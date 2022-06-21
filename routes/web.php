<?php

// author: rico

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts/default');
// });

// Route::get('/home', function () {
//     return view('layouts/default');
// });

Route::get('/', [CollectionController::class, 'gameIndex']);
Route::get('previous', [CollectionController::class, 'gameIndexPrevious']);
Route::get('next', [CollectionController::class, 'gameIndexNext']);

Route::get('new-comment', [CollectionController::class, 'newComment']);

Route::get('search', [SearchController::class, 'searchName']);

Route::post('addgame', [UploadController::class, 'addgame']);




