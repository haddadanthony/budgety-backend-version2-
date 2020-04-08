<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Incomes
Route::get('/incomes', 'IncomeController@index');
Route::get('/incomes/{id}', 'IncomeController@show');
Route::post('/incomes', 'IncomeController@store');
Route::delete('/incomes/{id}', 'IncomeController@destroy');
Route::put('/incomes/{id}', 'IncomeController@update');

