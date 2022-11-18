<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', [CustomerController::class, 'index'])->middleware('auth');
Route::get('/show/{customer}', [CustomerController::class, 'show'])->middleware('auth');
Route::get('/customer/new', [CustomerController::class, 'create'])->middleware('auth');
Route::post('/store', [CustomerController::class, 'store'])->middleware('auth');
//create
//store - store new
//edit
Route::get('customer/edit/{customer}', [CustomerController::class, 'edit'])->middleware('auth');
//update
Route::put('customer/edit/submit/{customer}', [CustomerController::class, 'update'])->middleware('auth');
//soft delete
Route::delete('customer/delete/submit/{customer}', [CustomerController::class, 'delete'])->middleware('auth');
//destroy
Route::post('customer/destroy/submit/{customer}', [CustomerController::class, 'destroy'])->middleware('auth');
//show soft delete
Route::get('/softDeleted', [CustomerController::class, 'showDeleted'])->middleware('auth');
//restore client
Route::post('customer/restore/{customer}', [CustomerController::class, 'restoreCustomer'])->middleware('auth');

//Admin routes
//Register
Route::get('/register', [UserController::class, 'create']);
Route::post('/register/new', [UserController::class, 'new']);

//login
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/admin/authenticate', [UserController::class, 'authenticate']);
//logout
Route::post('/logout', [UserController::class, 'logout']);





