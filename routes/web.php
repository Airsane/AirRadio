<?php

use Illuminate\Support\Facades\Route;
use App\Models\Radio;

Route::get('/', function () {
    return view('welcome');
});
