<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get ('users/{id}', 'PageController@user')
->where('id','\d+');


/*Route::get ('{salutation}/{nom}', 'PageController@salutation')
->where('salutation','[a-zA- Z]+')
->where('nom','[a-zA-Z]+');*/
Route:: get ('/articles', 'ArticleController@index');
Route:: get ('/articles/create', 'ArticleController@store');
Route:: get ('/articles/update', 'ArticleController@update'); 
Route:: get ('/articles/destroy', 'ArticleController@destroy'); 
Route:: get ('/articles/{id}', 'ArticleController@show'); 
