<?php

use App\Models\Course;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $courses = Course::all();
    return view('welcome', compact('courses'));
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // Vista Horarios
    Route::view('horarios', 'horarios')
        ->middleware('verified')    // exigir email verificado (opcional)
        ->name('horarios');

    // Vista Historial
    Route::view('historial', 'historial')
        ->middleware('verified')    // exigir email verificado (opcional)
        ->name('historial');


        Route::view('documentos-pendientes', 'documentos-pendientes')
        ->middleware(['auth','verified'])
        ->name('documentos.pendientes');
        
        Route::view('notas', 'notas')
        ->middleware('verified')
        ->name('notas');


    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)
        ->name('settings.profile');

    Route::get('settings/password', Password::class)
        ->name('settings.password');

    Route::get('settings/appearance', Appearance::class)
        ->name('settings.appearance');
});

require __DIR__.'/auth.php';
