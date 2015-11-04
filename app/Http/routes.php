<?php


//Route::get('/', 'HomeController@index');


// Route::get('?page={id}', function($id){

// });

Route::get('/', 'HomeController@index');

Route::get('/index.html', [
    'as'   => 'index.html', 
    'uses' => 'HomeController@index'
]);

Route::get('/post.html', [
    'as'   => 'post.html', 
    'uses' => 'HomeController@create'
]);


Route::get('/content', 'HomeController@show');


//Route::get('/post', 'HomeController@create');

Route::post('/post', 'HomeController@store'); 


Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@index'); 



Route::get('/edit', 'AdminController@edit');

Route::get('/out', 'AdminController@out');

