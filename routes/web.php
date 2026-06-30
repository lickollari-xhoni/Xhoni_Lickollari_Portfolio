<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/work', function () {
    return view('work'); // resources/views/work.blade.php
})->name('work');

Route::get('/about', function () {
    return view('about'); // resources/views/about.blade.php
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // resources/views/contact.blade.php
})->name('contact');

Route::get('/certificazioni', function () {
    return view('certificazioni'); // Assicurati di avere un file 'resources/views/certificazioni.blade.php'
})->name('certificazioni');

Route::get('/lang/{locale}', function ($locale) {
    // Verifichiamo che la lingua sia valida (italiano o inglese)
    if (in_array($locale, ['it', 'en'])) {
        // La salviamo nella sessione
        Session::put('locale', $locale);
    }
    // Rimandiamo l'utente alla pagina dove si trovava prima
    return redirect()->back();
})->name('lang.switch');