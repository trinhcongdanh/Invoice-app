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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// get all invoice
Route::get('/get_all_invoice',[InvoiceController::class,'get_all_invoice']);
// get invoice by search
Route::get('/search_invoice',[InvoiceController::class,'search_invoice']);
