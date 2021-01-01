<?php

use App\Http\Livewire\Kategori;
use App\Http\Livewire\Pejabat;
use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function(){

    Route::get('/omah', Dashboard::class)->name('home');

    Route::get('/kategori', Kategori\Index::class);

    Route::get('/pejabat', Pejabat\Index::class)->name('pejabat');

});

