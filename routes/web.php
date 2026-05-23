<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::resource('/', JobController::class)->only(['index' , 'show']);
