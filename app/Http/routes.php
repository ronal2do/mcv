<?php

Route::get('/', ['as'=>'index', 'uses'=>'IndexController@index'] );

Route::get('/post/{slug}', ['uses' => 'IndexController@view', 'as' => 'post.ver']);


Route::group(['middleware' => ['web']], function () {
    //
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'HomeController@index');
    Route::get('/admin/posts', 'PostController@index');
    Route::get('/admin/posts/criar', 'PostController@create');
    Route::post('/admin/posts', 'PostController@store');

    Route::get('/admin/categorias', 'CategoriaController@index');
    Route::get('/admin/categorias/criar', 'CategoriaController@create');
    Route::post('/admin/categorias', 'CategoriaController@store');

});
