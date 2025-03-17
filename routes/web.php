<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\Service_detailsController;
use Illuminate\Support\Facades\Route;




Route::get('/', [PagesController::class,'Welcome'])->name('welcome');
Route::get('/about', [PagesController::class,'AboutUs'])->name('aboutUs');
Route::get('/support', [PagesController::class,'Support'])->name('support');
Route::get('/space', [PagesController::class,'Space'])->name('space');
Route::get('/services', [PagesController::class,'Service'])->name('service');

Route::get('/contact', [PagesController::class,'Contact'])->name('contact');

Route::get('/service_detail_1', [Service_detailsController::class,'Service_detail1'])->name('service_detail_1');
