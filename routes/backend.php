<?php

Route::group(['prefix' => 'auth', 'namespace' => 'Auth\Admin'], function () {

    Route::get('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'LoginController@login')->name('admin.login.post');
    Route::get('logout', 'LoginController@logout')->name('admin.logout');

});


Route::group(['prefix' => 'user', 'middleware' => 'auth:admin', 'namespace' => 'Admin'], function () {

    Route::get('/dashboard', function () {
        return view('pages.backend.dashboard');
    })->name('admin.dashboard');

    Route::get('/', function () {
        return view('pages.backend.dashboard');
    });

    Route::get('/settings', 'SettingController@index')->name('admin.settings');
    Route::post('/settings', 'SettingController@update')->name('admin.settings.update');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'CategoryController@index')->name('admin.categories.index');
        Route::get('/create', 'CategoryController@create')->name('admin.categories.create');
        Route::post('/store', 'CategoryController@store')->name('admin.categories.store');
        Route::get('/{id}/edit', 'CategoryController@edit')->name('admin.categories.edit');
        Route::post('/update', 'CategoryController@update')->name('admin.categories.update');
        Route::get('/{id}/delete', 'CategoryController@delete')->name('admin.categories.delete');
    });

    Route::group(['prefix' => 'attributes'], function () {
        Route::get('/', 'AttributeController@index')->name('admin.attributes.index');
        Route::get('/create', 'AttributeController@create')->name('admin.attributes.create');
        Route::post('/store', 'AttributeController@store')->name('admin.attributes.store');
        Route::get('/{id}/edit', 'AttributeController@edit')->name('admin.attributes.edit');
        Route::post('/update', 'AttributeController@update')->name('admin.attributes.update');
        Route::get('/{id}/delete', 'AttributeController@delete')->name('admin.attributes.delete');

        Route::post('/get-values', 'AttributeValueController@getValues');
        Route::post('/add-values', 'AttributeValueController@addValues');
        Route::post('/update-values', 'AttributeValueController@updateValues');
        Route::post('/delete-values', 'AttributeValueController@deleteValues');
    });
});
