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
});
