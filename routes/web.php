<?php

namespace App\Models;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MainPage;
use App\Http\Livewire\SignIn;
use App\Http\Livewire\SignUp;
use App\Http\Livewire\SupplierTable;
use App\Http\Controllers\SupplierController;
use Laravel\Fortify\Fortify;

Route::get('/', MainPage::class);
Route::get('/signin', SignIn::class)->name('signin');
Route::get('/signup', SignUp::class)->name('signup');

Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::registerView(function () {
    return view('auth.register');
});

// Other Fortify routes...

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/supplier-table', SupplierTable::class)->name('supplier.table');

    // Route for storing a newly created supplier
    Route::post('/suppliers', [SupplierController::class, 'store'])->name('suppliers.store');

    // Other routes for editing, updating, and deleting suppliers using the resourceful controller
    Route::resource('suppliers', SupplierController::class)->except(['create', 'store']);
    Route::match(['get', 'post'], '/layouts/create', [SupplierController::class, 'create'])->name('layouts.create');
    Route::get('/edit', function () {
        return view('layouts.edit'); // Adjusted view name
    })->name('edit');
    Route::get('/info', function () {
        return view('layouts.info');
    })->name('info');
    Route::get('/history', function () {
        return view('layouts.history');
    })->name('history');
    Route::get('/monitoring', function () {
        return view('layouts.monitoring');
    })->name('monitoring');





});