<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('customer',App\Http\Controllers\CustomerController::class);

Route::get('getcustomer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('api-getAll');
Route::get('getcustomer/{id}', [\App\Http\Controllers\CustomerController::class, 'getCustomer1'])->name('api-getAllid');

Route::delete('deletecustomer/{id}', [\App\Http\Controllers\CustomerController::class, 'deleteCustomer'])->name('api-delete');
Route::post('savecustomer', [App\Http\Controllers\CustomerController::class, 'store'])->name('api-saveProduct');
Route::put('editcustomer/{id}', [App\Http\Controllers\CustomerController::class, 'editCustomer'])->name('api-editCustomer');
