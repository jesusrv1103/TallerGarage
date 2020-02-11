<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::group(
    [
      'prefix' => 'admin',
      'namespace' => 'Admin',
    ],
    function () {
        //Guardias
        Route::get('presupuestos', 'PresupuestoController@index')->name('admin.presupuestos.index');
        Route::get('presupuestos/create', 'PresupuestoController@create')->name('admin.presupuestos.create');
        Route::post('presupuestos', 'PresupuestoController@store')->name('admin.presupuestos.store');
        Route::get('presupuestos/{presupuesto}/edit', 'PresupuestoController@edit')->name('admin.presupuestos.edit');
        Route::put('presupuestos/{presupuesto}', 'PresupuestoController@update')->name('admin.presupuestos.update');
        Route::delete('presupuestos/{presupuesto}', 'PresupuestoController@destroy')->name('admin.presupuestos.destroy');


        Route::get('clientes', 'ClienteController@index')->name('admin.clientes.index');
        Route::get('clientes/create', 'ClienteController@create')->name('admin.clientes.create');
        Route::post('clientes', 'ClienteController@store')->name('admin.clientes.store');
        Route::get('clientes/{presupuesto}/edit', 'ClienteController@edit')->name('admin.clientes.edit');
        Route::put('clientes/{presupuesto}', 'ClienteController@update')->name('admin.clientes.update');
        Route::delete('clientes/{presupuesto}', 'ClienteController@destroy')->name('admin.clientes.destroy');
  
   
      }
  );


