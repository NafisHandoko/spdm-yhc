<?php

use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Mahasiswa;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });
Route::get('/', [C_Home::class, 'index'])->middleware('auth');
// Route::get('/', [C_Home::class, 'index']);

Route::get('/login', [C_Auth::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [C_Auth::class, 'login']);
Route::post('/logout', [C_Auth::class, 'logout']);

Route::get('/mahasiswa/add-view', [C_Mahasiswa::class, 'addView'])->middleware('auth');
Route::post('/mahasiswa/add-post', [C_Mahasiswa::class, 'addPost'])->middleware('auth');
Route::get('/mahasiswa/{id}', [C_Mahasiswa::class, 'index'])->middleware('auth');
Route::get('/mahasiswa/{id}/edit-view', [C_Mahasiswa::class, 'editView'])->middleware('auth');
Route::post('/mahasiswa/{id}/edit-post', [C_Mahasiswa::class, 'editPost'])->middleware('auth');
Route::get('/mahasiswa/{id}/delete', [C_Mahasiswa::class, 'delete'])->middleware('auth');
Route::post('/search', [C_Mahasiswa::class, 'search'])->middleware('auth');