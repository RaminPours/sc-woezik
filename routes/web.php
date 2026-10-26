<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Return old form submissions to the page without processing any data.
Route::post('/', fn () => redirect('/', 303));
