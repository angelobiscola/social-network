<?php

Route::get('/',           ['as' =>'index'  , 'uses' => 'GroupController@index' ]);
Route::get('/create',     ['as' =>'create' , 'uses' => 'GroupController@create']);
Route::post('/store',     ['as' =>'store'  , 'uses' => 'GroupController@store' ]);
Route::get('/show/{id}',  ['as' =>'show'   , 'uses' => 'GroupController@show'  ]);
Route::get('{id}/edit',   ['as' =>'edit'   , 'uses' => 'GroupController@edit'  ]);
Route::post('{id}/update',['as' =>'update' , 'uses' => 'GroupController@update']);
Route::get('{id}/delete', ['as' =>'delete' , 'uses' => 'GroupController@delete']);