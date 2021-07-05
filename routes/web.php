<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('fd0a',function(){
    return 'get';
});

Route::post('/probando/ruta',function(){
    return 'post';
});

Route::put('/probando/ruta',function(){
    return 'put';
});

Route::delete('/probando/ruta',function(){
    return 'delete';
});

Route::match(['get', 'post', 'put'],'/testing', function(){
});

Route::any('/cualquiercosa', function(){
});
