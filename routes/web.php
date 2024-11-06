<?php

use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/constructions', [ConstructionController::class, 'index'])->name('ConstructionController.index');
Route::get('/constructions/create', [ConstructionController::class,'create'])->name('ConstructionController.create');
Route::get('/constructions/store', [ConstructionController::class,'store'])->name('ConstructionController.store');
Route::get('/constructions/edit/{id}', [ConstructionController::class,'edit'])->name('ConstructionController.edit');
Route::put('/constructions/update/{id}', [ConstructionController::class,'update'])->name('ConstructionController.update');
Route::delete('/constructions/destroy/{id}', [ConstructionController::class,'destroy'])->name('ConstructionController.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


