<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RdwController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectenController;

Route::view('/', 'pages.home')->name('home');
Route::view('/over', 'pages.over')->name('over');
Route::view('/diensten', 'pages.diensten')->name('diensten');
Route::view('/zakelijk', 'pages.zakelijk')->name('zakelijk');

Route::view('/projecten', 'pages.projecten')->name('projecten');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/voorwaarden', 'pages.voorwaarden')->name('voorwaarden');

Route::view('/info/auto-laten-poetsen', 'pages.info_auto')->name('info.auto');
Route::view('/info/dealers-showroom', 'pages.info_dealers')->name('info.dealers');
Route::view('/info/wagenpark-zakelijk', 'pages.info_zakelijk')->name('info.zakelijk');

// RDW lookup endpoint
Route::get('/rdw/lookup', [RdwController::class, 'lookup'])->name('rdw.lookup');

// Contact submit
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// projecten
Route::get('/projecten/{album}', [ProjectenController::class, 'album'])
  ->name('projecten.album');