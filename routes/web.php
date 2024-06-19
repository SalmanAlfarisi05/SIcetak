<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\CuttingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaminasiController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Carbon\Carbon;

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
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    $subMonth = Carbon::now()->subMonth()->format('Y-m-d');
    return view('dashboard',compact('subMonth'));

})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','checkRole:management'])->group(function () {
    Route::resource('order',OrderController::class);
    Route::resource('bahan',BahanController::class);
    Route::resource('laminasi',LaminasiController::class);
    Route::resource('cutting',CuttingController::class);
    Route::resource('users',UserController::class);
    Route::resource('pengeluaran',PengeluaranController::class);
    
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/get/omset',[DashboardController::class,'getOmset'])->name('get.omset');
    Route::get('/get/filter/omset/{start}/{end}',[DashboardController::class,'getOmsetFilter'])->name('get.omset.filter');
});

require __DIR__.'/auth.php';
