<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Map;
use App\Livewire\Dashboard;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/map', Map::class)->name('map');


