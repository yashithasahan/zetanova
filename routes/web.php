<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/404', function () { return view('pages.404'); });
Route::get('/products/{id}', [App\Http\Controllers\FrontendController::class, 'product']);
Route::get('/bouncy', [App\Http\Controllers\FrontendController::class, 'bouncy']);
Route::get('/balloons', [App\Http\Controllers\FrontendController::class, 'balloons']);
Route::get('/birthdays', [App\Http\Controllers\FrontendController::class, 'birthdays']);
Route::get('/kids', [App\Http\Controllers\FrontendController::class, 'kids']);
Route::get('/lighting', [App\Http\Controllers\FrontendController::class, 'lighting']);
Route::get('/sound', [App\Http\Controllers\FrontendController::class, 'sound']);
Route::get('/party-console', [App\Http\Controllers\FrontendController::class, 'partyConsole']);

Route::prefix('zetoa96')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/inventory/{inventory}', [App\Http\Controllers\InventoryController::class, 'destroy'])->name('inventory.destroy');
    Route::delete('/inventory/image/{image}', [App\Http\Controllers\InventoryController::class, 'destroyImage'])->name('inventory.image.destroy');
    Route::resource('inventory', App\Http\Controllers\InventoryController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
});

require __DIR__.'/auth.php';
