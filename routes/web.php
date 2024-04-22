<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Models\Ticket;
use App\Models\User;






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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});


Route::get('/buy-ticket', function () {
    return view('buy-ticket');
})->name('buy-ticket');
Route::post('/buy-ticket', [TicketController::class, 'store'])->name('buy-ticket');

Route::get('/', function () {
    return view('index');
})->name('index');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');



Route::post('/admin', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');


Route::post('/admin/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');


Route::get('/admin/selectUser', [App\Http\Controllers\AdminController::class, 'selectUser'])->name('admin.selectUser');



require __DIR__.'/auth.php';
