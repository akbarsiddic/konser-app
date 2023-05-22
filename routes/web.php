<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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



Route::get("/", [TicketController::class, 'index'])->name('ticket.index');


Route::post("/", [TicketController::class, 'create'])->name('ticket.create');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/dashboard", [TicketController::class, 'see'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::post("/edit/{id}", [TicketController::class, 'edit'])->name('ticket.edit');
Route::get("/edit/{id}", [TicketController::class, 'update'])->name('ticket.update');
Route::get("/dashboard/delete/{id}", [TicketController::class, 'delete'])->name('ticket.delete');
Route::get("/check" , function(){
    return view('check');
})->name('check');
Route::get("/check", [TicketController::class, 'check'])->name('check');
Route::post("/check", [TicketController::class, 'checkIn'])->name('ticket.checkIn');
});

require __DIR__.'/auth.php';
