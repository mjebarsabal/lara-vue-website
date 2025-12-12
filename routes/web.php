<?php

use Inertia\Inertia;

Route::get('/', fn () => Inertia::render('Landing'));
Route::get('/products', fn () => Inertia::render('Products'));
Route::get('/about', fn () => Inertia::render('About'));
Route::get('/contact', fn () => Inertia::render('Contact'));