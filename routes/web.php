<?php


Route::get('/', 'MovieController@index');
Route::get('/now', 'MovieController@now');
Route::get('/now/{id}', 'MovieController@show');

Route::get('/coming', 'MovieController@coming');

Route::get('/movie/create', 'MovieController@create');
Route::post('/movie/store', 'MovieController@store');
Route::get('/movie/edit/{id}', 'MovieController@edit');
Route::post('/movie/update', 'MovieController@update');


Route::post('/ticket/store', 'TicketController@store');


Route::get('/city/{name}', 'CinemaController@index');
Route::get('/city/{name}/cinema/show/{id}', 'CinemaController@show');

Route::get('/{city}/ticket', 'TicketController@index');
Route::get('/{city}/cinema', 'CinemaController@cinema');

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
