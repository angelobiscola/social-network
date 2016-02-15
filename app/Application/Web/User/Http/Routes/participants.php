<?php

Route::get('/',           ['as' =>'index'  , 'uses' => 'ParticipantController@index' ]);
Route::get('/create',     ['as' =>'create' , 'uses' => 'ParticipantController@create']);
Route::post('/store',     ['as' =>'store'  , 'uses' => 'ParticipantController@store' ]);
Route::get('/show/{id}',  ['as' =>'show'   , 'uses' => 'ParticipantController@show'  ]);
Route::get('{id}/edit',   ['as' =>'edit'   , 'uses' => 'ParticipantController@edit'  ]);
Route::post('{id}/update',['as' =>'update' , 'uses' => 'ParticipantController@update']);
Route::get('{id}/delete', ['as' =>'delete' , 'uses' => 'ParticipantController@delete']);