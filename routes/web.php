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
//Auth::routes(['verify'=>true]);
		Auth::routes(['verify'=>true]);

		Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');
		Route::get('/',function(){
			return view('/home');})->middleware('verified');

		Route::get('/home',function(){
			return view('/layout.main2');})->middleware('verified');

		Route::get('/login', 'AuthController@getLogin')->name('login')->middleware('guest');
		Route::post('/login','AuthController@postLogin')->middleware('guest');
		Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
		Route::post('/register','AuthController@postRegister')->middleware('guest');
		Route::get('/logout', 'AuthController@logout')->middleware('guest');
		Route::patch('/user/edit/{user}', 'ProfileController@update')->middleware('verified');
		Route::get('/profile/{user}', 'ProfileController@show')->middleware('verified');
		Route::group(['middleware' => 'auth'], function () {
		    Route::get('password', 'ProfileController@changepass')->name('password.change');
		    Route::put('password', 'ProfileController@updatepass')->name('password.update');
		    Route::get('users', 'ProfileController@index')->name('users')->middleware('verified');
		    Route::post('/user/update/{user}', 'ProfileController@edituser')->middleware('verified');
		    Route::delete('/users/delete/{user}', 'ProfileController@destroy')->middleware('verified');
			Route::patch('/user/update/{User}', 'ProfileController@updateuser')->middleware('verified');
});

// Homescreen
		Route::get('/homescreen', 'HomescreenController@index')->middleware('guest');
		Route::get('/SOP', 'HomescreenController@showsop')->middleware('verified');
		Route::get('/grafikdefect', 'HomescreenController@showdefect')->middleware('verified');
		Route::get('/grafiklistrikunit', 'HomescreenController@showlistrikunit')->middleware('verified');


//genset
		Route::get('/genset', 'GensetController@index')->middleware('verified');
		Route::get('/genset/view/{genset}', 'GensetController@show')->middleware('verified');
		Route::post('/genset/edit/{genset}', 'GensetController@edit')->middleware('auth');
		Route::patch('/genset/edit/{genset}', 'GensetController@update')->middleware('verified');
		Route::post('/genset/filter', 'GensetController@search')->middleware('verified');
		Route::get('/genset/add', 'GensetController@create')->middleware('verified');
		Route::post('/genset/add', 'GensetController@store')->middleware('verified');
		Route::delete('/genset/delete/{genset}', 'GensetController@destroy')->middleware('verified');
		Route::post('/genset/export', 'GensetController@export')->middleware('verified');
		Route::post('/genset/teangan', 'GensetController@teangan')->middleware('auth');

		Route::get('/pmgenset', 'GensetController@indexpm')->middleware('verified');
		Route::get('/pmgenset/view/{pmgenset}', 'GensetController@showpm')->middleware('verified');
		Route::post('/pmgenset/edit/{pmgenset}', 'GensetController@editpm')->middleware('auth');
		Route::patch('/pmgenset/edit/{pmgenset}', 'GensetController@updatepm')->middleware('verified');
		Route::post('/pmgenset/export', 'GensetController@exportpm')->middleware('verified');
		Route::post('/pmgenset/add', 'GensetController@storepm')->middleware('verified');
		Route::get('/pmgenset/add', 'GensetController@createpm')->middleware('verified');
		Route::delete('/pmgenset/delete/{pmgenset}', 'GensetController@destroypm')->middleware('verified');
		Route::post('/pmgenset/cari', 'GensetController@cari')->middleware('auth');

//amr
		Route::get('/amr', 'AmrsController@index')->middleware('verified');
		Route::post('/amr/teangan', 'AmrsController@teangan')->middleware('verified');
		Route::post('/amr/filter', 'AmrsController@search')->middleware('verified');
		Route::get('/amr/add', 'AmrsController@create')->middleware('verified');
		Route::post('/amr/add', 'AmrsController@store')->middleware('verified');
		Route::post('/amr/edit/{amr}', 'AmrsController@edit')->middleware('auth');
		Route::patch('/amr/edit/{amr}', 'AmrsController@update')->middleware('verified');
		Route::delete('/amr/delete/{amr}', 'AmrsController@destroy')->middleware('verified');
		Route::post('/amr/export', 'AmrsController@export')->middleware('verified');


//pdam
		Route::get('/pdam', 'PdamsController@index')->middleware('verified');
		Route::post('/pdam/filter', 'PdamsController@search')->middleware('verified');
		Route::get('/pdam/add', 'PdamsController@create')->middleware('verified');
		Route::post('/pdam/add', 'PdamsController@store')->middleware('verified');
		Route::post('/pdam/teangan', 'PdamsController@teangan')->middleware('auth');
		Route::post('/pdam/edit/{pdam}', 'PdamsController@edit')->middleware('auth');
		Route::patch('/pdam/edit/{pdam}', 'PdamsController@update')->middleware('verified');
		Route::delete('/pdam/delete/{pdam}', 'PdamsController@destroy')->middleware('verified');
		Route::post('/pdam/export', 'PdamsController@export')->middleware('verified');

//transfer pump
		Route::get('/transferpump', 'TransferpumpsController@index')->middleware('verified');
		Route::post('/transferpump/filter', 'TransferpumpsController@search')->middleware('verified');
		Route::get('/transferpump/add', 'TransferpumpsController@create')->middleware('verified');
		Route::post('/transferpump/add', 'TransferpumpsController@store')->middleware('verified');
		Route::post('/transferpump/view/{transferpump}', 'TransferpumpsController@show')->middleware('auth');
		Route::post('/transferpump/edit/{transferpump}', 'TransferpumpsController@edit')->middleware('auth');
		Route::patch('/transferpump/edit/{transferpump}', 'TransferpumpsController@update')->middleware('verified');
		Route::delete('/transferpump/delete/{transferpump}', 'TransferpumpsController@destroy')->middleware('verified');
		Route::post('transferpump/export','TransferpumpsController@export')->middleware('verified');
		Route::post('/transferpump/teangan', 'TransferpumpsController@teangan')->middleware('auth');


//booster pump
		Route::get('/boosterpump', 'BoosterpumpsController@index')->middleware('verified');
		Route::post('/boosterpump/filter', 'BoosterpumpsController@search')->middleware('verified');
		Route::get('/boosterpump/add', 'BoosterpumpsController@create')->middleware('verified');
		Route::post('/boosterpump/add', 'BoosterpumpsController@store')->middleware('verified');
		Route::post('/boosterpump/view/{boosterpump}', 'BoosterpumpsController@show')->middleware('verified');
		Route::post('/boosterpump/edit/{boosterpump}', 'BoosterpumpsController@edit')->middleware('auth');
		Route::patch('/boosterpump/edit/{boosterpump}', 'BoosterpumpsController@update')->middleware('verified');
		Route::delete('/boosterpump/delete/{boosterpump}', 'BoosterpumpsController@destroy')->middleware('verified');
		Route::post('/boosterpump/export', 'BoosterpumpsController@export')->middleware('verified');
		Route::post('/boosterpump/teangan', 'BoosterpumpsController@teangan')->middleware('auth');

//pompa sumpit
		Route::get('/sumpitpump', 'SumpitpumpsController@index')->middleware('verified');
		Route::post('/sumpitpump/filter', 'SumpitpumpsController@search')->middleware('verified');
		Route::get('/sumpitpump/add', 'SumpitpumpsController@create')->middleware('verified');
		Route::post('/sumpitpump/add', 'SumpitpumpsController@store')->middleware('verified');
		Route::post('/sumpitpump/view/{sumpitpump}', 'SumpitpumpsController@show')->middleware('verified');
		Route::post('/sumpitpump/edit/{sumpitpump}', 'SumpitpumpsController@edit')->middleware('auth');
		Route::patch('/sumpitpump/edit/{sumpitpump}', 'SumpitpumpsController@update')->middleware('verified');
		Route::delete('/sumpitpump/delete/{sumpitpump}', 'SumpitpumpsController@destroy')->middleware('auth');
		Route::post('/sumpitpump/export', 'SumpitpumpsController@export')->middleware('verified');
		Route::post('/sumpitpump/teangan', 'SumpitpumpsController@teangan')->middleware('auth');
		

//fire pump
		Route::get('/firepump', 'FirepumpsController@index')->middleware('verified');
		Route::post('/firepump/edit/{firepump}', 'FirepumpsController@edit')->middleware('auth');
		Route::patch('/firepump/edit/{firepump}', 'FirepumpsController@update')->middleware('verified');
		Route::post('/firepump/filter', 'FirepumpsController@search')->middleware('verified');
		Route::post('/firepump/view/{firepump}', 'FirepumpsController@show')->middleware('verified');
		Route::get('/firepump/add', 'FirepumpsController@create')->middleware('verified');
		Route::post('/firepump/add', 'FirepumpsController@store')->middleware('verified');
		Route::post('/firepump/export', 'FirepumpsController@export')->middleware('verified');
		Route::post('/firepump/teangan', 'FirepumpsController@teangan')->middleware('auth');
        Route::delete('/firepump/delete/{firepump}', 'FirepumpsController@destroy')->middleware('auth');

		Route::get('/pmfirepump', 'FirepumpsController@indexpm')->middleware('verified');
		Route::post('/pmfirepump/view/{pmfirepumps}', 'FirepumpsController@showpm')->middleware('auth');
		Route::post('/pmfirepump/edit/{pmfirepumps}', 'FirepumpsController@editpm')->middleware('auth');
		Route::patch('/pmfirepump/edit/{pmfirepumps}', 'FirepumpsController@updatepm')->middleware('verified');
		Route::post('/pmfirepump/export', 'FirepumpsController@exportpm')->middleware('verified');
		Route::post('/pmfirepump/add', 'FirepumpsController@storepm')->middleware('verified');
		Route::get('/pmfirepump/add', 'FirepumpsController@createpm')->middleware('verified');
		Route::delete('/pmfirepump/delete/{pmfirepumps}', 'FirepumpsController@destroypm')->middleware('verified');
		Route::post('/pmfirepump/cari', 'FirepumpsController@cari')->middleware('auth');

//logbook
		Route::get('/logbook', 'LogbooksController@index')->middleware('verified');
		Route::post('/logbook/filter', 'LogbooksController@search')->middleware('verified');
		Route::post('/logbook/view/{logbook}', 'LogbooksController@show')->middleware('verified');
		Route::post('/logbook/edit/{logbook}', 'LogbooksController@edit')->middleware('auth');
		Route::patch('/logbook/edit/{logbook}', 'LogbooksController@update')->middleware('verified');
		Route::get('/logbook/add', 'LogbooksController@create')->middleware('verified');
		Route::post('/logbook/add', 'LogbooksController@store')->middleware('verified');
		Route::post('/logbook/export', 'LogbooksController@export')->middleware('verified');
		Route::post('/logbook/teangan', 'LogbooksController@teangan')->middleware('auth');
		Route::delete('/logbook/delete/{logbook}', 'LogbooksController@destroy')->middleware('verified');

//water meter unit
		Route::get('/watermeterunit', 'WatermeterunitsController@index')->middleware('verified');
		Route::post('/watermeterunit/filter', 'WatermeterunitsController@search')->middleware('verified');
		Route::get('/watermeterunit/add', 'WatermeterunitsController@create')->middleware('verified');
		Route::get('/watermeterunit/add/{watermeterunit}', 'WatermeterunitsController@show')->middleware('verified');
		Route::post('/watermeterunit/add', 'WatermeterunitsController@store')->middleware('verified');
		Route::get('/watermeterunit/edit/{watermeterunit}', 'WatermeterunitsController@edit')->middleware('verified');
		Route::patch('/watermeterunit/edit/{watermeterunit}', 'WatermeterunitsController@update')->middleware('verified');
		Route::delete('/watermeterunit/delete/{watermeterunit}', 'WatermeterunitsController@destroy')->middleware('auth');
		Route::post('/watermeterunit/export', 'WatermeterunitsController@export')->middleware('verified');
		Route::post('/watermeterunit/cari', 'WatermeterunitsController@cari')->middleware('auth');

//kwh unit
		Route::get('/kwhmeterunit', 'KwhmeterunitsController@index')->middleware('verified');
		Route::post('/kwhmeterunit/filter', 'KwhmeterunitsController@search')->middleware('verified');
		Route::get('/kwhmeterunit/add', 'KwhmeterunitsController@create')->middleware('verified');
		Route::get('/kwhmeterunit/add/{kwhmeterunit}', 'KwhmeterunitsController@show')->middleware('auth');
		Route::post('/kwhmeterunit/add', 'KwhmeterunitsController@store')->middleware('verified');
		Route::get('/kwhmeterunit/edit/{kwhmeterunit}', 'KwhmeterunitsController@edit')->middleware('verified');
		Route::patch('/kwhmeterunit/edit/{kwhmeterunit}', 'KwhmeterunitsController@update')->middleware('verified');
		Route::delete('/kwhmeterunit/delete/{kwhmeterunit}', 'KwhmeterunitsController@destroy')->middleware('auth');
		Route::post('/kwhmeterunit/export', 'KwhmeterunitsController@export')->middleware('verified');
		Route::post('/kwhmeterunit/cari', 'KwhmeterunitsController@cari')->middleware('auth');
		
		Route::get('/kwhcomersile', 'KwhmeterunitsController@indexcomersile')->middleware('verified');
		Route::post('/kwhcomersile/filter', 'KwhmeterunitsController@searchcomersile')->middleware('verified');
		Route::get('/kwhcomersile/add', 'KwhmeterunitsController@createcomersile')->middleware('verified');
		Route::get('/kwhcomersile/add/{kwhcomersile}', 'KwhmeterunitsController@showcomersile')->middleware('auth');
		Route::post('/kwhcomersile/add', 'KwhmeterunitsController@storecomersile')->middleware('verified');
		Route::get('/kwhcomersile/edit/{kwhcomersile}', 'KwhmeterunitsController@editcomersile')->middleware('verified');
		Route::patch('/kwhcomersile/edit/{kwhcomersile}', 'KwhmeterunitsController@updatecomersile')->middleware('verified');
		Route::delete('/kwhcomersile/delete/{kwhcomersile}', 'KwhmeterunitsController@destroycomersile')->middleware('verified');
		Route::post('/kwhcomersile/export', 'KwhmeterunitsController@exportcomersile')->middleware('verified');
		Route::post('/kwhcomersile/cari', 'KwhmeterunitsController@caricomersile')->middleware('auth');



//powerhouse
		Route::get('/PowerHouse', 'PowerHousesController@index')->middleware('verified');
		Route::get('/PowerHouse/add', 'PowerHousesController@create')->middleware('verified');
		Route::post('/PowerHouse/add', 'PowerHousesController@store')->middleware('verified');
		Route::post('/PowerHouse/view/{powerHouse}', 'PowerHousesController@show')->middleware('auth');
		Route::post('/PowerHouse/edit/{powerHouse}', 'PowerHousesController@edit')->middleware('auth');
		Route::patch('/PowerHouse/edit/{powerHouse}', 'PowerHousesController@update')->middleware('verified');
		Route::post('/PowerHouse/filter', 'PowerHousesController@search')->middleware('verified');
		Route::post('/PowerHouse/export', 'PowerHousesController@export')->middleware('verified');
		Route::post('/PowerHouse/teangan', 'PowerHousesController@teangan')->middleware('auth');
		Route::delete('/PowerHouse/delete/{powerHouse}', 'PowerHousesController@destroy')->middleware('auth');

		Route::get('/pmpanel', 'PowerHousesController@indexpm')->middleware('verified');
		Route::post('/pmpanel/view/{pmpanel}', 'PowerHousesController@showpm')->middleware('auth');
		Route::post('/pmpanel/edit/{pmpanel}', 'PowerHousesController@editpm')->middleware('auth');
		Route::patch('/pmpanel/edit/{pmpanel}', 'PowerHousesController@updatepm')->middleware('verified');
		Route::post('/pmpanel/export', 'PowerHousesController@exportpm')->middleware('verified');
		Route::post('/pmpanel/add', 'PowerHousesController@storepm')->middleware('verified');
		Route::get('/pmpanel/add', 'PowerHousesController@createpm')->middleware('verified');
		Route::delete('/pmpanel/delete/{pmpanel}', 'PowerHousesController@destroypm')->middleware('auth');
		Route::post('/pmpanel/cari', 'PowerHousesController@cari')->middleware('auth');

//stp
		Route::get('/stp', 'StpController@index')->middleware('verified');
		Route::get('/stp/add', 'StpController@create')->middleware('verified');
		Route::post('/stp/add', 'StpController@store')->middleware('verified');
		Route::post('/stp/edit/{stp}', 'StpController@edit')->middleware('verified');
		Route::post('/stp/view/{stp}', 'StpController@show')->middleware('verified');
		Route::patch('/stp/edit/{stp}', 'StpController@update')->middleware('verified');
		Route::post('/stp/filter', 'StpController@search')->middleware('verified');
		Route::post('/stp/export', 'StpController@export')->middleware('verified');
		Route::post('/stp/cari', 'StpController@teangan')->middleware('auth');
        Route::delete('/stp/delete/{stp}','StpController@destroy')->middleware('auth');

		Route::get('/pmstp', 'StpController@indexpm')->middleware('verified');
		Route::post('/pmstp/view/{pmstp}', 'StpController@showpm')->middleware('auth');
		Route::post('/pmstp/edit/{pmstp}', 'StpController@editpm')->middleware('auth');
		Route::patch('/pmstp/edit/{pmstp}', 'StpController@updatepm')->middleware('verified');
		Route::post('/pmstp/export', 'StpController@exportpm')->middleware('verified');
		Route::post('/pmstp/add', 'StpController@storepm')->middleware('verified');
		Route::get('/pmstp/add', 'StpController@createpm')->middleware('verified');
		Route::delete('/pmstp/delete/{pmstp}', 'StpController@destroypm')->middleware('auth');
		Route::post('/pmstp/cari', 'StpController@cari')->middleware('auth');

//pm pompa
		Route::get('/pmpompa', 'PmpompaController@indexpm')->middleware('verified');
		Route::post('/pmpompa/view/{pmpompa}', 'PmpompaController@showpm')->middleware('auth');
		Route::post('/pmpompa/edit/{pmpompa}', 'PmpompaController@editpm')->middleware('auth');
		Route::patch('/pmpompa/edit/{pmpompa}', 'PmpompaController@updatepm')->middleware('verified');
		Route::post('/pmpompa/export', 'PmpompaController@exportpm')->middleware('verified');
		Route::post('/pmpompa/add', 'PmpompaController@storepm')->middleware('verified');
		Route::get('/pmpompa/add', 'PmpompaController@createpm')->middleware('verified');
		Route::delete('/pmpompa/delete/{pmpompa}', 'PmpompaController@destroypm')->middleware('auth');
		Route::post('/pmpompa/cari', 'PmpompaController@cari')->middleware('auth');

//pmgondola
		Route::get('/gondola', 'PmgondolaController@indexpm')->middleware('verified');
		Route::post('/gondola/view/{pmgondola}', 'PmgondolaController@showpm')->middleware('auth');
		Route::post('/gondola/edit/{pmgondola}', 'PmgondolaController@editpm')->middleware('auth');
		Route::patch('/gondola/edit/{pmgondola}', 'PmgondolaController@updatepm')->middleware('verified');
		Route::post('/gondola/export', 'PmgondolaController@exportpm')->middleware('verified');
		Route::post('/gondola/add', 'PmgondolaController@storepm')->middleware('verified');
		Route::get('/gondola/add', 'PmgondolaController@createpm')->middleware('verified');
		Route::delete('/gondola/delete/{pmgondola}', 'PmgondolaController@destroypm')->middleware('auth');
		Route::post('/gondola/cari', 'PmgondolaController@cari')->middleware('auth');
//pmac
		Route::get('/ac', 'PmacController@indexpm')->middleware('verified');
		Route::post('/ac/view/{pmac}', 'PmacController@showpm')->middleware('auth');
		Route::post('/ac/edit/{pmac}', 'PmacController@editpm')->middleware('auth');
		Route::patch('/ac/edit/{pmac}', 'PmacController@updatepm')->middleware('verified');
		Route::post('/ac/export', 'PmacController@exportpm')->middleware('verified');
		Route::post('/ac/add', 'PmacController@storepm')->middleware('verified');
		Route::get('/ac/add', 'PmacController@createpm')->middleware('verified');
		Route::delete('/ac/delete/{pmac}', 'PmacController@destroypm')->middleware('auth');
		Route::post('/ac/cari', 'PmacController@cari')->middleware('auth');

//pmfirealarm
		Route::get('/pmfirealarm', 'FirealarmController@indexpm')->middleware('verified');
		Route::post('/pmfirealarm/view/{firealarm}', 'FirealarmController@showpm')->middleware('auth');
		Route::post('/pmfirealarm/edit/{firealarm}', 'FirealarmController@editpm')->middleware('auth');
		Route::patch('/pmfirealarm/edit/{firealarm}', 'FirealarmController@updatepm')->middleware('verified');
		Route::post('/pmfirealarm/export', 'FirealarmController@exportpm')->middleware('verified');
		Route::post('/pmfirealarm/add', 'FirealarmController@storepm')->middleware('verified');
		Route::get('/pmfirealarm/add', 'FirealarmController@createpm')->middleware('verified');
		Route::delete('/pmfirealarm/delete/{firealarm}', 'FirealarmController@destroypm')->middleware('auth');
		Route::post('/pmfirealarm/cari', 'FirealarmController@cari')->middleware('auth');

//pm clean water tank
		Route::get('/cwt', 'PmcleanWaterTankController@indexpm')->middleware('verified');
		Route::post('/cwt/view/{cwt}', 'PmcleanWaterTankController@showpm')->middleware('auth');
		Route::post('/cwt/edit/{cwt}', 'PmcleanWaterTankController@editpm')->middleware('auth');
		Route::patch('/cwt/edit/{cwt}', 'PmcleanWaterTankController@updatepm')->middleware('verified');
		Route::post('/cwt/export', 'PmcleanWaterTankController@exportpm')->middleware('verified');
		Route::post('/cwt/add', 'PmcleanWaterTankController@storepm')->middleware('verified');
		Route::get('/cwt/add', 'PmcleanWaterTankController@createpm')->middleware('verified');
		Route::delete('/cwt/delete/{cwt}', 'PmcleanWaterTankController@destroypm')->middleware('auth');
		Route::post('/cwt/cari', 'PmcleanWaterTankController@cari')->middleware('auth');

//pm rooftank
		Route::get('/rooftank', 'RooftankController@indexpm')->middleware('verified');
		Route::post('/rooftank/view/{rooftank}', 'RooftankController@showpm')->middleware('auth');
		Route::post('/rooftank/edit/{rooftank}', 'RooftankController@editpm')->middleware('auth');
		Route::patch('/rooftank/edit/{rooftank}', 'RooftankController@updatepm')->middleware('verified');
		Route::post('/rooftank/export', 'RooftankController@exportpm')->middleware('verified');
		Route::post('/rooftank/add', 'RooftankController@storepm')->middleware('verified');
		Route::get('/rooftank/add', 'RooftankController@createpm')->middleware('verified');
		Route::delete('/rooftank/delete/{rooftank}', 'RooftankController@destroypm')->middleware('auth');
		Route::post('/rooftank/cari', 'RooftankController@cari')->middleware('auth');

//pm box hydrant
		Route::get('/hydrant', 'HydrantboxController@indexpm')->middleware('verified');
		Route::post('/hydrant/view/{hydrantbox}', 'HydrantboxController@showpm')->middleware('auth');
		Route::post('/hydrant/edit/{hydrantbox}', 'HydrantboxController@editpm')->middleware('auth');
		Route::patch('/hydrant/edit/{hydrantbox}', 'HydrantboxController@updatepm')->middleware('verified');
		Route::post('/hydrant/export', 'HydrantboxController@exportpm')->middleware('verified');
		Route::post('/hydrant/add', 'HydrantboxController@storepm')->middleware('verified');
		Route::get('/hydrant/add', 'HydrantboxController@createpm')->middleware('verified');
		Route::delete('/hydrant/delete/{hydrantbox}', 'HydrantboxController@destroypm')->middleware('auth');
		Route::post('/hydrant/cari', 'HydrantboxController@cari')->middleware('auth');

//pm toilet
		Route::get('/toilet', 'ToiletController@indexpm')->middleware('verified');
		Route::post('/toilet/view/{toilet}', 'ToiletController@showpm')->middleware('auth');
		Route::post('/toilet/edit/{toilet}', 'ToiletController@editpm')->middleware('auth');
		Route::patch('/toilet/edit/{toilet}', 'ToiletController@updatepm')->middleware('verified');
		Route::post('/toilet/export', 'ToiletController@exportpm')->middleware('verified');
		Route::post('/toilet/add', 'ToiletController@storepm')->middleware('verified');
		Route::get('/toilet/add', 'ToiletController@createpm')->middleware('verified');
		Route::delete('/toilet/delete/{toilet}', 'ToiletController@destroypm')->middleware('auth');
		Route::post('/toilet/cari', 'ToiletController@cari')->middleware('auth');

//pm ef & if
		Route::get('/fan', 'FanController@indexpm')->middleware('verified');
		Route::post('/fan/view/{fan}', 'FanController@showpm')->middleware('auth');
		Route::post('/fan/edit/{fan}', 'FanController@editpm')->middleware('auth');
		Route::patch('/fan/edit/{fan}', 'FanController@updatepm')->middleware('verified');
		Route::post('/fan/export', 'FanController@exportpm')->middleware('verified');
		Route::post('/fan/add', 'FanController@storepm')->middleware('verified');
		Route::get('/fan/add', 'FanController@createpm')->middleware('verified');
		Route::delete('/fan/delete/{fan}', 'FanController@destroypm')->middleware('auth');
		Route::post('/fan/cari', 'FanController@cari')->middleware('auth');

Route::get('/esp', 'Espcontroller@index');
Route::get('/esplampu', 'Espcontroller@show');
Route::patch('/esp/update/{esp}', 'Espcontroller@update');
Route::patch('/esp/updates/{esp}', 'Espcontroller@updates');
Route::post('/esp/edit/{esp}', 'Espcontroller@edit');
Route::get('/grafikesp', 'Espcontroller@showgrafik');

// Route::post('/profile', 'HomescreenController@profile')->middleware('verified')->name('profile');
		Route::get('/beritaacara', 'BeritaacaraController@index')->middleware('verified');
		Route::get('/tirtamakmur', 'FanController@indextani');
//tehuli dealer honda banjar testing 18 nov 2020
Route::get('/carda', 'FanController@indexcarda');
