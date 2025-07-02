<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('about',[App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('/services',[App\Http\Controllers\ServicesController::class,'index'])->name('services');
Route::get('/portfolio',[App\Http\Controllers\PortfolioController::class,'index'])->name('portfolio');
Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact');

