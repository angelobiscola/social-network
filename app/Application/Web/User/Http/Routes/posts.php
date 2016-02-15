<?php

Route::get('/',           ['as' =>'index'  , 'uses' => 'PostController@index' ]);
Route::get('/create',     ['as' =>'create' , 'uses' => 'PostController@create']);
Route::post('/store',     ['as' =>'store'  , 'uses' => 'PostController@store' ]);
Route::get('/show/{id}',  ['as' =>'show'   , 'uses' => 'PostController@show'  ]);
Route::get('{id}/edit',   ['as' =>'edit'   , 'uses' => 'PostController@edit'  ]);
Route::post('{id}/update',['as' =>'update' , 'uses' => 'PostController@update']);
Route::get('{id}/delete', ['as' =>'delete' , 'uses' => 'PostController@delete']);