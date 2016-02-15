<?php
Route::get('/', [ 'middleware' => 'oauth','as' =>'home.index', 'uses' => 'HomeController@index']);



Route::post('oauth/access_token', function() {

    return Response::json(Authorizer::issueAccessToken());

});

