<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['mensaje'=>'API server is running!!']);
});
