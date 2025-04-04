<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Service_detailsController;
use Illuminate\Support\Facades\Route;




Route::get('/', [PagesController::class,'Welcome'])->name('welcome');
Route::get('/about', [PagesController::class,'AboutUs'])->name('aboutUs');
Route::get('/support', [PagesController::class,'Support'])->name('support');
Route::get('/space', [PagesController::class,'Space'])->name('space');
Route::get('/services', [PagesController::class,'Service'])->name('service');
Route::get('/programs', [ProgramController::class,'Program'])->name('programs');
Route::get('/equip', [PagesController::class,'Equip'])->name('equip');

Route::get('/contact', [PagesController::class,'Contact'])->name('contact');

Route::get('/service_detail_1', [Service_detailsController::class,'Service_detail1'])->name('service_detail_1');
Route::get('/service_detail_2', [Service_detailsController::class,'Service_detail2'])->name('service_detail_2');
Route::get('/service_detail_3', [Service_detailsController::class,'Service_detail3'])->name('service_detail_3');
Route::get('/service_detail_4', [Service_detailsController::class,'Service_detail4'])->name('service_detail_4');
Route::get('/service_detail_5', [Service_detailsController::class,'Service_detail5'])->name('service_detail_5');



Route::get('/project_detail1', [ProjectController::class,'Project1'])->name('project_detail_1');
Route::get('/project_detail2', [ProjectController::class,'Project2'])->name('project_detail_2');
Route::get('/project_detail3', [ProjectController::class,'Project3'])->name('project_detail_3');


// Route::get('/project_detail2', [ProgramController::class,'Project2'])->name('project_detail2');

// Route::get('/project_detail3', [ProgramController::class,'Project3'])->name('project_detail3');
