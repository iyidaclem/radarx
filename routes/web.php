<?php

use App\Livewire\Community;
use App\Livewire\Contact;
use App\Livewire\Events;
use App\Livewire\Gallery;
use App\Livewire\Merch;
use App\Livewire\Video;
use App\Livewire\Welcome;
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

Route::get('/', Welcome::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware("auth")->group(function(){

    Route::get("/videos", Video::class);
    Route::get("/events", Events::class);
    Route::get("/community", Community::class);
    Route::get("/contact", Contact::class);
    Route::get("/merch", Merch::class);

// });
