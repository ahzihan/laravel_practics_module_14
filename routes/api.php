<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AllpathController;
use App\Http\Controllers\MultipartFormData;

Route::get('/url/{name}/{age}', [UrlController::class, 'UrlDataReceive']);
Route::get('/header', [HeaderController::class, 'HeaderDataReceive']);
Route::get('/body', [BodyController::class, 'BodyDataReceive']);
Route::get('/multiple/{name}/{age}', [AllpathController::class, 'AllPathReceive']);
Route::post('/multipart', [MultipartFormData::class, 'FileUpload']);


