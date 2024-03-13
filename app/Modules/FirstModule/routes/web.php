<?php

use Illuminate\Support\Facades\Route;

Route::get('first-module', 'FirstModuleController@welcome');
Route::post('form-submit', 'FirstModuleController@submit')->name('form-submit');
