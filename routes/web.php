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
/*
Route::get('/', function () {
    return view('auth.login');
});
*/
Route::get('/', 'SeccionHomeController@index');
Route::get('/search', 'SeccionHomeController@buscador');

Route::get('empresa', 'SeccionEmpresaController@index')->name('empresa.page');
Route::get('productos', 'SeccionProductoController@index')->name('productos.page');
Route::post('enviarpresupuesto', 'SeccionPresupuestoController@store')->name('enviarpresupuesto');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('adm')->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/informacion', 'HomeController@indexInformacion')->name('home.info');
    Route::get('/home/informacion/{id}/edit', 'HomeController@editInformacion')->name('home.info.edit');
    Route::put('home/informacion/{id}', 'HomeController@update');
    //Route::get('/home/slider', 'SliderController@index')->name('slider.index');

    //Ruta para la seccion Empresa
    Route::get('/empresa', 'EmpresaController@index')->name('empresa');
    Route::get('/empresa/{id}/edit', 'EmpresaController@edit')->name('empresa.edit');
    Route::put('/empresa/{id}', 'EmpresaController@update');


    //Ruta para la seccion Productos
    Route::resource('/productos', 'ProductoController')->except([
        'show',
    ]);
    Route::prefix('producto')->group(function ()
    {


        //Ruta para la seccion Categoria
        Route::resource('/categorias', 'CategoriaController')->except([
            'show',
        ]);

        //Ruta para la seccion Galeria
        Route::prefix('galerias/')->group(function () {
            Route::get('index/{id}', 'GaleriaController@index');
            Route::get('create/{id}', 'GaleriaController@create');
            Route::post('store', 'GaleriaController@store');
            Route::get('edit/{id}', 'GaleriaController@edit');
            Route::put('update/{id}', 'GaleriaController@update');
            Route::get('delete/{id}', 'GaleriaController@eliminar');
        });
    });

    //Ruta para la gestión de sliders
    Route::get('{seccion}/slider/', 'SliderController@index');
    Route::get('{seccion}/slider/crear/', 'SliderController@create');
    Route::post('{seccion}/slider/guardar', 'SliderController@store');
    Route::get('{seccion}/slider/edit/{id}', 'SliderController@edit');
    Route::put('{seccion}/slider/update/{id}', 'SliderController@update');
    Route::get('slider/delete/{id}', 'SliderController@eliminar');

});