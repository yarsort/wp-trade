<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\ProductController;
use App\Http\ProductCharacteristicController;
use App\Http\UnitController;
use App\Http\OrganizationController;
use App\Http\CashboxController;
use App\Http\WarehouseController;
use App\Http\TypePriceController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


// User
Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');

// Product
Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@delete');

// Product characteristic
Route::get('products_characteristics', 'ProductCharacteristicController@index');
Route::get('products_characteristics/{id}', 'ProductCharacteristicController@show');
Route::post('products_characteristics', 'ProductCharacteristicController@store');
Route::put('products_characteristics/{id}', 'ProductCharacteristicController@update');
Route::delete('products_characteristics/{id}', 'ProductCharacteristicController@delete');

// Unit
Route::get('units', 'UnitController@index');
Route::get('units/{id}', 'UnitController@show');
Route::post('units', 'UnitController@store');
Route::put('units/{id}', 'UnitController@update');
Route::delete('units/{id}', 'UnitController@delete');

// Organization
Route::get('organizations', 'OrganizationController@index');
Route::get('organizations/{id}', 'OrganizationController@show');
Route::post('organizations', 'OrganizationController@store');
Route::put('organizations/{id}', 'OrganizationController@update');
Route::delete('organizations/{id}', 'OrganizationController@delete');

// Cashbox
Route::get('cashboxes', 'CashboxController@index');
Route::get('cashboxes/{id}', 'CashboxController@show');
Route::post('cashboxes', 'CashboxController@store');
Route::put('cashboxes/{id}', 'CashboxController@update');
Route::delete('cashboxes/{id}', 'CashboxController@delete');
