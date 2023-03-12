<?php

use App\Http\Controllers\CakeShopController;
use Illuminate\Support\Facades\Route;

Route::get('cake/home',[CakeShopController::class,'home'])->name('cake#home');
Route::get('cake/cakes',[CakeShopController::class,'cakePage'])->name('cake#cakePage');
Route::get('cake/about',[CakeShopController::class,'aboutpage'])->name('cake#aboutPage');
Route::get('cake/blog',[CakeShopController::class,'blogPage'])->name('cake#blog');
Route::get('cake/contact',[CakeShopController::class,'contactPage'])->name('cake#contact');