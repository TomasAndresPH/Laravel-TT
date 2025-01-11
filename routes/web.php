<?php

use Illuminate\Support\Facades\Route;

Route::get('/usuarios', function () {
    return view('users.index');
});
