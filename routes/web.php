<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/product",[App\Http\Controllers\ProductController::class, "index"])
->name("product.index")
->middleware("auth");

Route::get("/frontend/product/create", [App\Http\Controllers\ProductController::class, "create"])
->name("frontend.product")
->middleware("auth");

Route::post("/frontend/product/save", [App\Http\Controllers\ProductController::class, "store"])
->name("frontend.save")
->middleware("auth");

Route::get("/edit/{id}",[App\Http\Controllers\HomeController::class, "edit"])
->name("frontend.edit")
->middleware("auth");
Route::post("/update",[App\Http\Controllers\HomeController::class, "update"])
->name("frontend.update")
->middleware("auth");
Route::get("/delete/{id}",[App\Http\Controllers\HomeController::class, "destroy"])
->name("frontend.delete")
->middleware("auth");
Route::get("/sum",[App\Http\Controllers\sumController::class, "sum"])
->name("frontend.sum")
->middleware("auth");