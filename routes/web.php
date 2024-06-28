<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


Route::get('/' ,[HomeController::class, 'index']);

Route::post('/add_Product' , [HomeController::class, 'add_Product']);

Route::get('show_product' , [HomeController::class, 'show_product']);

Route::get('delete_product/{id}' , [HomeController::class, 'delete_product']);

Route::get('update_product/{id}' , [HomeController::class, 'update_product']);

Route::post('edit_Product/{id}' , [HomeController::class, 'edit_Product']);



