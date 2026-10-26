
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourismController;

Route::get('/', [TourismController::class, 'index'])
    ->name('home');

Route::get('/packages/{slug}', [TourismController::class, 'show'])
    ->name('packages.show');
