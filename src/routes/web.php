<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommandsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Routes need authentication
Route::middleware(['auth'])->group(function (){
    Route::get('/clients', [ClientsController::class, 'index'])->name("clients");
    Route::get('/clients/export', [ClientsController::class, 'exportCsv'])->name("clients.export.csv");

    Route::get('/commands', [CommandsController::class, 'index'])->name("commands");
});

require __DIR__.'/auth.php';
