<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Pages\SchemeForm;

Route::get('/scheme-form', SchemeForm::class)->name('scheme.form');
Route::get('/', function () {
    return view('welcome');
});
