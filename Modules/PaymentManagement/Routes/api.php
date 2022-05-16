<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\PaymentManagement\Http\Controllers\PaymentManagementController;


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

Route::middleware('auth:api')->get('/paymentmanagement', function (Request $request) {
    return $request->user();
});


Route::post('addpayment', [PaymentManagementController::class, 'store']);
Route::get('payments', [PaymentManagementController::class, 'index']);
Route::put('updatepayment/{id}', [PaymentManagementController::class, 'update']);
Route::delete('deletepayment/{id}', [PaymentManagementController::class, 'destroy']);