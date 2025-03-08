<?php

use App\Http\Controllers\JoinController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::redirect('dashboard', 'games')->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('games', 'games.index')->name('games.index');
    Volt::route('games/create', 'games.create')->name('games.create');
    Volt::route('games/{game}', 'games.show')->name('games.show');
    Route::get('games/{game}/join', JoinController::class)->name('games.join');
    Volt::route('games/{game}/play', 'games.play')->name('games.play');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
