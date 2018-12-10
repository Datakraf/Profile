<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::group(['prefix' => 'profile', 'middleware' => ['auth']],function(){

    Route::view('/', 'profile::forms.personal-details.index', ['actionUrl' => 'hello', 'method' => 'POST'])->name('profile.index');
    Route::post('/store', ['uses' => 'PersonalDetailsController@store', 'as' => 'profile.store']);
    // family
    Route::group(['prefix' => 'family'], function () {
        Route::view('/', 'profile::forms.personal-details.family-details', ['actionUrl' => 'hello', 'method' => 'POST'])->name('profile.family');
    });

    // academic
    Route::group(['prefix' => 'academic'], function () {
        Route::view('/', 'profile::forms.personal-details.academic', ['actionUrl' => 'hello', 'method' => 'POST'])->name('profile.academic-records');
    });
    
    // experience
    Route::group(['prefix' => 'employment-history'], function () {
        Route::view('/', 'profile::forms.personal-details.experience', ['actionUrl' => 'hello', 'method' => 'POST'])->name('profile.experience');
    });

    Route::group(['prefix' => 'skills'], function () {
        Route::view('/', 'profile::forms.personal-details.skills', ['actionUrl' => 'hello', 'method' => 'POST'])->name('profile.skills');
    });

    Route::group(['prefix' => 'awards'], function () {
        Route::view('/', 'profile::forms.personal-details.awards', ['actionUrl' => 'hello', 'method' => 'POST'])->name('profile.awards');
    });



});
