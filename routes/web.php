<?php
Route::get('/','IndexController@index')->name('index');
Route::get('/contacto', 'ContactoController@index')->name('contacto');
Route::get('/productos', 'ProductosController@index')->name('productos');
Route::get('/ubicacion', 'UbicacionController@index')->name('ubicacion');
Route::get('/servicios', 'ServiciosController@index')->name('servicios');
