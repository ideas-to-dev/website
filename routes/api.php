<?php

Route::group(['prefix' => 'ideas'], function () {
    Route::get('/', ['uses' => 'Api\IdeasController@index'])
        ->name('api.ideas.index');
    Route::get('/{id}', ['uses' => 'Api\IdeasController@show'])
        ->name('api.ideas.show');
    Route::get('category/{id}', ['uses' => 'Api\IdeasController@category'])
        ->name('api.ideas.category');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', ['uses' => 'Api\CategoriesController@index'])
        ->name('api.categories.index');
    Route::get('/{id}', ['uses' => 'Api\CategoriesController@show'])
        ->name('api.categories.show');
});

Route::group(['prefix' => 'repositories'], function () {
    Route::get('/', ['uses' => 'Api\RepositoriesController@index'])
        ->name('api.repositories.index');
    Route::get('/{id}', ['uses' => 'Api\RepositoriesController@show'])
        ->name('api.repositories.show');
    Route::post('/', ['uses' => 'Api\RepositoriesController@store'])
        ->name('api.repositories.store');
});

Route::group(['prefix' => 'likes'], function () {
    Route::post('/', ['uses' => 'Api\LikesController@store'])
        ->name('api.likes.store');
});

Route::middleware(['auth']
)->group(function () {

});
