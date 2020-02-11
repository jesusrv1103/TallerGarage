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
    return view('welcome');
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
  
   
      }
  );