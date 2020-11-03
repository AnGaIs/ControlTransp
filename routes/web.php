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

Route::group(['middleware' => ['auth']], function () {

	Route::get('/', 'HomeController@index');
	Route::get('/home', 'HomeController@index');

	Route::group(['middleware' => ['roles']], function () {

		Route::any('/perfil', 'ProfilesController@perfil');
		Route::post('/profiles/default', 'ProfilesController@defaultProfile');
		Route::get('/reports/generate/{id}', 'ReportsController@generate');

		Route::resource('users', 'UsersController');
		Route::resource('reports', 'ReportsController');
		Route::resource('indicators', 'IndicatorsController');
		Route::resource('permissions', 'PermissionsController');
		Route::resource('profiles', 'ProfilesController');
		Route::resource('logs', 'LogsController');
		Route::resource('skus', 'SkusController');
		Route::resource('paletizador', 'PaletizadorController');
		Route::resource('ocs', 'OcsController');

		/*
        * Upload Excel!
        */
		Route::get('/ocs', 'OcsController@index')->name('index');
		Route::post('import', 'OcsController@import')->name('import');
		/*
        * Campo de Truncagem do Upload da Oc Depois de Finalizar O PROCESSO!
        */
		Route::delete('/ocs',array('as'=>'ocs.truncate', 'uses'=>'OcsController@truncate'));

		Route::post('/', 'PaletizadorController@index')->name('index');


	});
	
});

Auth::routes();
