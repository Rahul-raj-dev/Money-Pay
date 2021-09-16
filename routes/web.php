<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
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

Auth::routes();


Route::get('/home', [HomeController::class, 'index']);

route::get('/users/{user}/credit',[TransactionController::class,'creditView']);
route::post('/users/{user}/credit',[TransactionController::class,'credit']);

route::get('/users/{user}/debit',[TransactionController::class,'debitView']);
route::post('/users/{user}/debit',[TransactionController::class,'debit']);

route::get('/users/{user}/transfer',[TransactionController::class,'transferView']);
route::post('/users/{user}/transfer',[TransactionController::class,'transfer']);

route::get('/users/{user}/transactions/history',[TransactionController::class,'history']);

