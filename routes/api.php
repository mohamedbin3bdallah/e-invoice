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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('sdk-einvoice')->group(function () {
	Route::prefix('/access')->group(function () {
		Route::post('/login', [App\Http\Controllers\InvoiceSDK\AccessController::class, 'login'])->name('api_login');
	});
	
	Route::middleware('auth:sanctum')->group(function () {
		Route::prefix('/access')->group(function () {
			Route::post('/logout', [App\Http\Controllers\InvoiceSDK\AccessController::class, 'logout'])->name('api_logout');
			Route::post('/create_token', [App\Http\Controllers\InvoiceSDK\AccessController::class, 'create_token'])->name('create_token');
			Route::post('/connect_token', [App\Http\Controllers\InvoiceSDK\AccessController::class, 'connect_token'])->name('connect_token');
		});
		Route::post('/common/name/{name}', [App\Http\Controllers\InvoiceSDK\CommonController::class, 'main_function_common'])->name('main_function_common');
		Route::post('/einvoicing/name/{name}', [App\Http\Controllers\InvoiceSDK\EinvoicingController::class, 'main_function_einvoicing'])->name('main_function_einvoicing');
	});
});