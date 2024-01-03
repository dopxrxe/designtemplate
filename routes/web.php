<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('pages.admin.home');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/admin/form-select/select', function () {
    return view('pages.admin.formelements.select');
})->middleware(['auth', 'verified'])->name('form-select');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [AdminController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [AdminController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [AdminController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
