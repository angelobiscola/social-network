<?php

Route::get('/',           ['as' =>'index'  , 'uses' => 'CommentController@index' ]);
Route::get('/create',     ['as' =>'create' , 'uses' => 'CommentController@create']);
Route::post('/store',     ['as' =>'store'  , 'uses' => 'CommentController@store' ]);
Route::get('/show/{id}',  ['as' =>'show'   , 'uses' => 'CommentController@show'  ]);
Route::get('{id}/edit',   ['as' =>'edit'   , 'uses' => 'CommentController@edit'  ]);
Route::post('{id}/update',['as' =>'update' , 'uses' => 'CommentController@update']);
Route::get('{id}/delete', ['as' =>'delete' , 'uses' => 'CommentController@delete']);