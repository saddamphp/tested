<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerstudent;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [controllerstudent::class, 'showdata']);
Route::post('/student/store', [controllerstudent::class, 'store']);
Route::get('/student/edit/{student_id}', [controllerstudent::class, 'edit']);
Route::post('/student/update/{student_id}', [controllerstudent::class, 'update']);
Route::get('/student/destroy/{student_id}', [controllerstudent::class, 'destroy']);

