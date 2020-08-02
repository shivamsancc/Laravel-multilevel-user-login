<?php



Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');


Route::get('/student', 'HomeController@index')->name('home')->middleware('student');


Route::get('/teacher', 'HomeController@index')->name('home')->middleware('teacher');