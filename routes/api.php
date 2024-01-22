<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// get all invoice
Route::get('/get_all_invoice',[InvoiceController::class,'get_all_invoice']);
// get invoice by search
Route::get('/search_invoice',[InvoiceController::class,'search_invoice']);
// get create invoice
Route::get('/create_invoice',[InvoiceController::class,'create_invoice']);
// get all customer
Route::get('/customers',[CustomerController::class,'all_customer']);
// get all product
Route::get('/products',[ProductController::class,'all_product']);
// add invoice
Route::post('/add_invoice',[InvoiceController::class,'add_invoice']);

