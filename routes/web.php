<?php

use App\Http\Controllers\MobilController;
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

Route::get('/', function () {
    return view('user/home', [
        'name' => 'Quin',
        'role' => 5
    ]);
});

Route::get('/', [MobilController::class, 'index']);
Route::get('/mobil-detail/{id}', [MobilController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard.home', [
        'name' => 'quin',
        'role' => 1
    ]);
});