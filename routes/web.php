<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CareerController;


Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/', function () {return view('welcome');});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {return view('auth.register');})->name('register');

Route::middleware(['auth'])->group(function () { // Use auth middleware to ensure that users are logged in before they can access the website
    Route::get('/career', function () {
        return view('career');
    })->name('career');
});

Route::get('/notes', function () { return view('notes');});

Route::get('/sheet_download', function () { return view('sheet_download');});

Route::get('/report_download', function () { return view('report_download');});

Route::get('/ideas/create', [CareerController::class, 'create'])->name('ideas.create');

Route::post('/ideas', [CareerController::class, 'store'])->name('ideas.store');

Route::get('/ideas/{id}/edit', [CareerController::class, 'edit'])->name('ideas.edit');

Route::put('/ideas/{id}', [CareerController::class, 'update'])->name('ideas.update');

Route::get('/ideas/show', [CareerController::class, 'show'])->name('ideas.show');

Route::delete('/ideas/{id}', [CareerController::class, 'destroy'])->name('ideas.destroy');

Route::get('/ideas', [CareerController::class, 'index'])->name('ideas.index');

Route::get('/ideas/{id}/comment', [CareerController::class, 'comment'])->name('ideas.comment');

Route::post('/ideas/{id}/comment', [CareerController::class, 'storeComment'])->name('comments.store');

Route::get('/ideas/search', [CareerController::class, 'search'])->name('ideas.search');

