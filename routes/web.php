<?php
/*
*** Front side Routes
***
*/
use Illuminate\Support\Facades\Route;
require('adminroute.php');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

