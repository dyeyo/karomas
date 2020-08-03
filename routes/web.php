<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
  return view('welcome');
});

// Route::get('/', function () {
//   if (Auth::check()) {
//     return view('/home');
//   } else {
//     return view('auth.login');
//   }
// });
Route::group(['middleware' => ['auth']], function () {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/logout',  'Auth\LoginController@logout')->name('logout');
  //PRODUCTOS
  Route::get('/productos', 'ProductosController@index')->name('products');
  Route::post('/producto/create', 'ProductosController@store')->name('product.store');
  Route::get('/producto/editar/{id}', 'ProductosController@edit')->name('product.edit');
  Route::put('/producto/{id}', 'ProductosController@update')->name('product.update');
  Route::delete('/producto/{id}', 'ProductosController@destroy')->name('product.delete');
});
