<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Map;
use App\Livewire\Welcome;
use App\Livewire\Index;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/dashboard', Index::class)->name('dashboard');

Route::get('/map', Map::class)->name('map');


