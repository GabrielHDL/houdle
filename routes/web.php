<?php

use App\Http\Controllers\Landing;
use App\Http\Livewire\Contact;
use App\Mail\ContactMailable;
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

Route::get('/', [Landing::class, 'index'])->name('home');

Route::get('/login', function () {
    return redirect('/');
});

Route::get('/register', function () {
    return redirect('/');
});

Route::get('/que', function () {
    return redirect('/#services', 301);
});

Route::get('/quien', function () {
    return redirect('/#about', 301);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
