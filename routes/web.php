<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get ('users/{id}', 'PageController@user')
->where('id','\d+');


Route::get ('{salutation}/{nom}', 'PageController@salutation')
->where('salutation','[a-zA-Z]+')
->where('nom','[a-zA-Z]+');