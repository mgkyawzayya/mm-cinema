<?php

Auth::routes();

Route::get('/', 'MovieController@index');
Route::get('/now', 'MovieController@now');
Route::get('/now/{id}', 'MovieController@show');
Route::get('/coming', 'MovieController@coming');
Route::get('/coming/{id}', 'MovieController@show');

Route::get('/cinemas/{name}', 'CinemaController@index');
Route::get('/cinemas/{name}/cinema/show/{id}', 'CinemaController@show');

Route::post('/cinema/update', 'CinemaController@update');

Route::get('/{city}/cinema', 'CinemaController@cinema');
Route::post('/cinema/store', 'CinemaController@store');
Route::get('{city}/cinema/create', 'CinemaController@create');
Route::get('{city}/cinema/edit/{id}', 'CinemaController@edit');
Route::delete('{city}/cinema/destroy/{id}', 'CinemaController@destroy');

Route::get('/movie/create', 'MovieController@create');
Route::get('/movie/show', 'MovieController@show');
Route::post('/movie/store', 'MovieController@store');
Route::get('/movie/edit/{id}', 'MovieController@edit');
Route::post('/movie/update', 'MovieController@update');
Route::delete('/movie/destroy/{id}', 'MovieController@destroy');

Route::post('/ticket/store', 'TicketController@store');
Route::get('/ticket/edit/{id}', 'TicketController@edit');
Route::post('/ticket/store', 'TicketController@store');
Route::get('/{city}/ticket', 'TicketController@index');

Route::get('/about', function () {
  return view('about');
});


Route::get('/dashboard', 'DashboardController@index');

Route::get('qr', function () {
  \QrCode::size(500)
    ->format('png')
    ->generate('http://kyawzayya.me', public_path('images/qrcode.png'));

  return view('welcome');

});

