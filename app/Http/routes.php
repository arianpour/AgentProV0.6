<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

//TODO: Old app need to convert to new all
/**
 * Client controller route protected by auth middleware
 * for user protections only .
 * the client controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('client', 'ClientController@index');
    Route::get('client/create', 'ClientController@create');
    Route::post('client/store', 'ClientController@store');
    Route::get('client/edit/{client}', 'ClientController@edit');
    Route::post('client/update/{client}', 'ClientController@update');
    Route::get('client/delete/{client}', 'ClientController@destroy');
    Route::get('client/{client}', 'ClientController@show');

});
/**
 * Client controller route protected by auth middleware
 * for user protections only .
 * the client controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('agmnt', 'RentalAgreementController@index');
    Route::get('agmnt/preCreate', 'RentalAgreementController@preCreate');
    Route::put('agmnt/create', 'RentalAgreementController@create');
    Route::post('agmnt/store', 'RentalAgreementController@store');
    Route::get('agmnt/edit/{agreement}', 'RentalAgreementController@edit');
    Route::post('agmnt/update/{agreement}', 'RentalAgreementController@update');
    Route::get('agmnt/delete/{agreement}', 'RentalAgreementController@destroy');
    Route::get('agmnt/preview', 'RentalAgreementController@createAgreement');
    Route::get('agmnt/{agreement}', 'RentalAgreementController@show');


});

/**
 * Bank Detail controller route protected by auth middleware
 * for user protections only .
 * the client controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('bankDetail', 'BankDetailController@index');
    Route::get('bankDetail/create', 'BankDetailController@create');
    Route::post('bankDetail/store', 'BankDetailController@store');
    Route::get('bankDetail/edit/{client}', 'BankDetailController@edit');
    Route::post('bankDetail/update/{bank}', 'BankDetailController@update');


});
/**
 * Owner controller route protected by auth middleware
 * for user protections only .
 * the Owner controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {

    Route::get('owner', 'OwnerController@index');
    Route::get('owner/create', 'OwnerController@create');
    Route::post('owner/store', 'OwnerController@store');
    Route::get('owner/edit/{client}', 'OwnerController@edit');
    Route::post('owner/update/{client}', 'OwnerController@update');
    Route::get('owner/delete/{client}', 'OwnerController@destroy');
    Route::get('owner/getbank/{client}', 'RentalAgreementController@OwnerBank');
    Route::get('owner/{client}', 'OwnerController@show');

});


/**
 * Property controller route protected by auth middleware
 * for user protections only .
 * the Property controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('property', 'PropertyController@index');
    Route::get('property/create', 'PropertyController@create');
    Route::get('property/store/{property}', 'PropertyController@store');
    Route::get('property/edit/{address}', 'PropertyController@edit');
    Route::get('property/destroy/{address}', 'PropertyController@destroy');

});

/**
 * Property controller route protected by auth middleware
 * for user protections only .
 * the Property controller functions:
 * index,create,store,edit,update,show
 *
 * */
Route::group(['middleware' => 'auth'], function () {
    Route::get('address', 'AddressController@index');
    Route::get('address/create', 'AddressController@create');
    Route::post('address/store', 'AddressController@store');
    Route::get('address/edit/{client}', 'AddressController@edit');
    Route::post('address/update/{address}', 'AddressController@update');
    Route::get('address/destroy/{address}', 'AddressController@destroy');
    Route::get('address/{address}', 'AddressController@show');

});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);