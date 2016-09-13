<?php

Route::get('/', function () {
    return view('welcome');
});

/*Route::resource('home','welcome.blade.php');*/
Route::resource('customers','CustomerController');
Route::resource('stocks','StockController');
Route::resource('investments','InvestmentController');

