<?php

use App\Livewire\Admin\UserManagement;
use App\Livewire\InductionManagement;
use Illuminate\Support\Facades\Route;

Route::get('/users',UserManagement::class)->middleware('can:Ver dashboard')->name('users');
Route::get('/roles',UserManagement::class)->middleware('can:Ver dashboard')->name('roles');
