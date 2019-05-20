<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/paganti', function () {
    return view('paganti');
});

Route::get('/paganti','PagantiController@getPaganti');
Route::get('/paganti/{id}','PagantiController@getPaganteById');
