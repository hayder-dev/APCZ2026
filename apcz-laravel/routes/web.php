<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RdwController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectenController;

Route::view('/', 'pages.home')->name('home');
Route::view('/over', 'pages.over')->name('over');
Route::view('/diensten', 'pages.diensten')->name('diensten');
Route::view('/zakelijk', 'pages.zakelijk')->name('zakelijk');

Route::get('/projecten', [ProjectenController::class, 'index'])->name('projecten');
Route::get('/projecten/{album}', [ProjectenController::class, 'album'])->name('projecten.album');

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/voorwaarden', 'pages.voorwaarden')->name('voorwaarden');

// INFO PAGINA
Route::view('/info', 'pages.info.index')->name('info.index');

// De drie hoofdstukken van de info pagina
Route::view('/info/auto-laten-poetsen', 'pages.info.auto')->name('info.auto');
Route::view('/info/dealers-showroom', 'pages.info.dealers')->name('info.dealers');
Route::view('/info/wagenpark-zakelijk', 'pages.info.zakelijk')->name('info.zakelijk');

// RDW lookup endpoint
Route::get('/rdw/lookup', [RdwController::class, 'lookup'])->name('rdw.lookup');

// Contact submit
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Routes voor de bovenste header
Route::get('/vacatures', fn() => view('pages.vacatures'))->name('vacatures');
Route::get('/vacatures/interieur', fn() => view('pages.vacature-interieur'))->name('vacature.interieur');
Route::get('/vacatures/polijsten', fn() => view('pages.vacature-polijsten'))->name('vacature.polijsten');

Route::get('/faq', fn() => view('pages.faq'))->name('faq');

// route voor fotostudio

Route::view('/fotostudio', 'pages.fotostudio')->name('fotostudio');


// voor seo pages


Route::view('/auto-laten-poetsen-zaandam', 'pages.auto-laten-poetsen-zaandam')->name('seo.zaandam');

Route::view('/auto-detailing-zaandam', 'pages.auto-detailing-zaandam')->name('seo.detailing.zaandam');

Route::get('/auto-laten-poetsen-wormerveer', function () {
    return view('pages.seo-city', ['city' => 'Wormerveer']);
})->name('seo.wormerveer');

Route::get('/auto-laten-poetsen-purmerend', function () {
    return view('pages.seo-city', ['city' => 'Purmerend']);
})->name('seo.purmerend');

Route::get('/auto-laten-poetsen-assendelft', function () {
    return view('pages.seo-city', ['city' => 'Assendelft']);
})->name('seo.assendelft');

Route::get('/auto-laten-poetsen-amsterdam', function () {
    return view('pages.seo-city', ['city' => 'Amsterdam']);
})->name('seo.amsterdam');