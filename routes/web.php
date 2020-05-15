<?php

use Illuminate\Support\Facades\Route;

/*
 * AdminRouts
*/

Route::group(['middleware' => ['web', 'auth', 'admin']], function () {

    Route::get('/admin-panel', 'AdminController@index')->name('admin.index');
    Route::Resource('/admin-panel/users', 'UsersController')->except('show');
    Route::get('/admin-panel/users/{id}', 'UsersController@destroy')->name('user.delete');

//    setting
    Route::get('/admin-panel/setting', 'SiteSettingController@index');
    Route::post('/admin-panel/setting', 'SiteSettingController@store')->name('setting.store');


// bu
    Route::get('/admin-panel/bu', 'BuController@index');
    Route::get('/admin-panel/bu/user_id={id?}', 'BuController@index');
    Route::get('/admin-panel/changeStatus/{id}', 'BuController@change_status');
    Route::get('/admin-panel/bu/create', 'BuController@create');
    Route::post('/admin-panel/bu', 'BuController@store');
    Route::get('/admin-panel/bu/edit/{id}', 'BuController@edit');
    Route::put('/admin-panel/bu/{id}', 'BuController@update');
    Route::get('/admin-panel/bu/{id}', 'BuController@destroy');
    Route::get('/admin-panel/home', 'HomeController@index')->name('home');


//    contact

    Route::post('/contact', 'HomeController@store');

    Route::get('/admin-panel/contact', 'HomeController@admin_form');
    Route::get('/admin-panel/contact/index', 'HomeController@index');
    Route::get('/admin-panel/contact/{id}/edit', 'HomeController@edit');
    Route::put('/admin-panel/contact/{id}', 'HomeController@update');
    Route::get('/admin-panel/contact/{id}', 'HomeController@destroy');


});

/*
 * User



*/
// show all buildings

Route::get('/showAllBuilding', 'BuController@showAllEnable');
// show single page

Route::get('/singleBuilding/{id}', 'buController@singleBuilding');
// show rent
Route::get('rent/{type}', 'BuController@forRent');
// show type

Route::get('/type/{type}', 'BuController@showType');
// contact
Route::get('/contact', 'ContactController@contact_form');
Route::post('/contact', 'HomeController@store');

// user building

Route::get('/user/create/building', 'BuController@user_add');
Route::post('/user/create/building', 'BuController@user_store');
Route::get('/user/buildingShow', 'BuController@showUserBuilding');
Route::get('/user/buildingShow/waiting', 'BuController@showUserBuildingWaiting');
Route::get('/user/editSetting', 'UsersController@usereditInfo');
Route::put('/user/editSetting/{id}', 'UsersController@userUpdateProfile');
Route::get('/user/edit/building/{id}', 'BuController@userEditBuildingForm')->middleware('auth');
Route::put('/user/edit/building/{id}', 'BuController@userEditBuilding')->middleware('auth');


//search

Route::get('/search', 'BuController@search');

// Welcome page
Route::get('home','HomeController@welcome');
Route::get('/','HomeController@welcome');

//Auth

Auth::routes();

