<?php

/****************  Authentication  ********************/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
/***************************************************0*/
Route::get('/getPlayer', 'PlayerController@getAllPlayer');
Route::get('/getClub', 'ClubController@getAllClub');




/*************** Route for pages ******************/

Route::get('/','PageController@index');
Route::get('/about','PageController@about');
Route::get('/contact','PageController@contact');
Route::get('/playerDetail','PageController@playerDetail');
Route::get('/playerDetailListView','PageController@playerDetailListView');
Route::get('/clubDetail','PageController@clubDetail');
Route::get('/coachdetail','PageController@coachdetail');
Route::get('/admin/dashboard','AdminController@dashboard');

Route::get('/articleDetail','PageController@articleDetail');
Route::get('/eventDetail','PageController@eventDetail');
Route::get('/gallery','PageController@gallery');
Route::get('photo-albumCollection/{albumID}/', 'PhotoController@getPhotosByAlbumCollection');

/****************** Routes for Player ************/

Route::resource('players','PlayerController');




Route::resource('clubs','ClubController');
Route::resource('coach','CoachController');
Route::resource('clubhistories','ClubHistoryController');
Route::resource('coachhistories','CoachDetailController');

Route::resource('playerhistories','PlayerHistoryController');
Route::resource('championship','ChampionshipDetailController');
Route::resource('sliders','SliderController');
Route::resource('articles','ArticleController');
Route::resource('events','EventController');

Route::resource('photos','PhotoController');
Route::get('photo-album/{albumID}', 'PhotoController@getPhotosByAlbum');

Route::resource('albums','AlbumController');


Route::post(
    'posts/search',
    array(
        'as' => 'posts.search',
        'uses' => 'ArticleController@postSearch'
    )
);
Route::post(
    'player/search',
    array(
        'as' => 'player.search',
        'uses' => 'PlayerController@playerSearch'
    )
);


/*****************Routes ************************/
Route::get('clubranking','PageController@clubranking');

Route::get('test','AdminController@test');