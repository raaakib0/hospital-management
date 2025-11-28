<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GenericController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/generics', [GenericController::class,'index']);
Route::get('/brand', [BrandController::class,'brands'] );
Route::get('/company', [CompanyController::class,'companys'] );