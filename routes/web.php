<?php


Route::get('/', 'MovieController@index');
Route::get('/now', 'MovieController@now');
Route::get('/coming', 'MovieController@coming');
Route::get('/show', 'MovieController@show');


Route::get('/city/yangon', 'CinemaController@index');
Route::get('/city/yangon/show', 'CinemaController@show');

Route::get('/about', function () {
  return view('about');
});


Route::get('/dashboard', function () {
  return view('admin.index');
});

Route::get('qr', function () {
  \QrCode::size(500)
    ->format('png')
    ->generate('http://kyawzayya.me', public_path('images/qrcode.png'));

  return view('welcome');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
