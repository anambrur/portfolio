<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/',PortfolioController::class)->names('portfolio');
