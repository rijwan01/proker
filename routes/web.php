<?php

Route::get('/', function () {
   return view('log');
});

Route::get('/admin/dashboard/', function () {
  return view('index');
});


//Route::get('/', 'Home@index');

Route::get('akunmaster', 'HomeController@index');

Route::get('topup', 'TopupController@index');
Route::get('withdraw', 'WithdrawController@index');
Route::get('/index', function () {
 return view('index');
});

Route::get('/masuk', function () {
 return view('masuk');
});

Route::get('/sign', function () {
 return view('sign');
});

Route::get('/profil', function () {
 return view('profil');
});