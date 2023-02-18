<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BankTypeController;
use App\Http\Controllers\CashappController;
use App\Http\Controllers\DumpsAndPinsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

// My Routes
// Terms and Conditions
Route::get('/t&c',[HomeController::class, 'tandc']);

// Add Cash
Route::get('/add_cash',[HomeController::class, 'addcash']);

// View Paypal
Route::get('/paypal',[HomeController::class, 'paypal']);

// View Cashapp
Route::get('/cashapp',[HomeController::class, 'cashapp']);

// View Cashapp
Route::get('/dumps&pins',[HomeController::class, 'dumpsandpins']);

// Admin Routes
// View Dashboard
Route::get('/dashboard',[AdminController::class, 'index']);
// View Manage Posts
Route::get('/manage-post',[AdminController::class, 'manage_post']);
// View Manage Bank
Route::get('/manage-bank',[AdminController::class, 'manage_bank']);
// View Manage Bank Types
Route::get('/manage-bank_type',[AdminController::class, 'manage_bank_type']);
// View Manage Dumps and Pins
Route::get('/manage-d&p',[AdminController::class, 'manage_dandp']);
// View Manage Cashapp
Route::get('/manage-cashapp',[AdminController::class, 'manage_cashapp']);
// View Manage Paypal
Route::get('/manage-paypal',[AdminController::class, 'manage_paypal']);
// View Manage Users
Route::get('/manage-users',[AdminController::class, 'manage_users']);



// Add Post
Route::post('/manage-post',[PostController::class, 'store']);

// Add Bank
Route::post('/manage-bank',[BankController::class, 'store']);

// Add Bank Type
Route::post('/manage-bank_type',[BankTypeController::class, 'store']);

// Add D&P
Route::post('/manage-d&p',[DumpsAndPinsController::class, 'store']);

// Add Cashapp
Route::post('/manage-cashapp',[CashappController::class, 'store']);

// Add Cashapp
Route::post('/manage-paypal',[PaypalController::class, 'store']);



// All For Posts
Route::get('/post/{post}/edit',[PostController::class, 'edit']);
Route::put('/post/{post}',[PostController::class, 'update']);
Route::delete('/post/{post}',[PostController::class, 'destroy']);

// All for Bank
Route::get('/bank/{bank}/edit', [BankController::class, 'edit']);
Route::put('/bank/{bank}', [BankController::class, 'update']);
Route::delete('/bank/{bank}', [BankController::class, 'destroy']);

// All for Bank Type
Route::get('/bank-type/{bank_type}/edit', [BankTypeController::class, 'edit']);
Route::put('/bank-type/{bank_type}', [BankTypeController::class, 'update']);
Route::delete('/bank-type/{bank_type}', [BankTypeController::class, 'destroy']);

// All for Dumps $ Pins
Route::get('/dandp/{dandp}/edit', [DumpsAndPinsController::class, 'edit']);
Route::put('/dandp/{dandp}', [DumpsAndPinsController::class, 'update']);
Route::delete('/dandp/{dandp}', [DumpsAndPinsController::class, 'destroy']);

// All for Cashapp
Route::get('/cashapp/{cashapp}/edit', [CashappController::class, 'edit']);
Route::put('/cashapp/{cashapp}', [CashappController::class, 'update']);
Route::delete('/cashapp/{cashapp}', [CashappController::class, 'destroy']);

// All for Paypal
Route::get('/paypal/{paypal}/edit', [PaypalController::class, 'edit']);
Route::put('/paypal/{paypal}', [PaypalController::class, 'update']);
Route::delete('/paypal/{paypal}', [PaypalController::class, 'destroy']);

