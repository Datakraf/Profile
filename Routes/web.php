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

Route::group(['prefix' => 'profile', 'middleware' => ['auth']], function () {

    Route::group(['prefix' => 'personal-details'], function () {
        Route::get('/', ['uses' => 'PersonalDetailsController@index', 'as' => 'personal.index']);
        Route::post('store', ['uses' => 'PersonalDetailsController@store', 'as' => 'personal.store']);
    });
    
    // family
    Route::group(['prefix' => 'family'], function () {
        Route::get('/', ['uses'=>'FamiliesController@index','as'=>'family.index']);
        Route::post('store', ['uses'=>'FamiliesController@store','as'=>'family.store']);
    });

    // academic
    Route::group(['prefix' => 'academic'], function () {
        Route::get('/', ['uses'=>'AcademicsController@index','as'=>'academic.index']);
        Route::post('store', ['uses'=>'AcademicsController@store','as'=>'academic.store']);
    });
    
    // experience
    Route::group(['prefix' => 'employment-history'], function () {
        Route::get('/', ['uses'=>'ExperiencesController@index','as'=>'experience.index']);
        Route::post('store', ['uses'=>'ExperiencesController@store','as'=>'experience.store']);
    });

    Route::group(['prefix' => 'skills'], function () {
        Route::view('/', 'profile::forms.personal-details.skills', ['actionUrl' => 'hello', 'method' => 'POST'])->name('profile.skills');
    });

    Route::group(['prefix' => 'awards'], function () {
        Route::view('/', 'profile::forms.personal-details.awards', ['actionUrl' => 'hello', 'method' => 'POST'])->name('profile.awards');
    });



});
