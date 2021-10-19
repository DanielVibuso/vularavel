<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/vehicle', 'App\Http\Controllers\VehicleController@index');
