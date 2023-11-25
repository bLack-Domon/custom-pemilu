<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customController;

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

Route::get('/', [customController::class, 'index']);

Route::get('/get-time', function() {
    return response()->json([
        'time' => date('H:i:s')
    ]);
})->name('get.time');
