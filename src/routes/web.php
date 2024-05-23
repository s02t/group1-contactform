<?php

use Illuminate\Support\Facades\Route;
use group3\contactform\Http\Controllers\ContactFormController;

Route::get('contact', [ContactFormController::class, 'showForm']);
Route::post('contact', [ContactFormController::class, 'submitForm']);
