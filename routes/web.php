<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('news/{group?}','NewsController@index')->name('actile.list');
Route::get('news/info/{new?}','NewsController@show')->name('actile.show');

Route::get('companys/category/{category}','CompanyController@index')->name('company.list');
Route::get('companys/info/{company}','CompanyController@show')->name('company.show');
Route::post('companys','CompanyController@list')->name('company.search');
Route::get('most-new','CompanyController@newest')->name('company.newest');
Route::get('monitor','CompanyController@monitor')->name('company.monitor');
Route::get('comments','CompanyController@comment')->name('company.comment');


Route::get('about','HomeController@about')->name('pages.about');
Route::get('statement','HomeController@statement')->name('pages.statement');
Route::get('agreement','HomeController@agreement')->name('pages.agreement');
Route::get('contactus','HomeController@contactus')->name('pages.contactus');


Route::post('platformcomment','CommonController@store')->name('comment.store');

Route::get('user','UserController@index')->name('user.index');


