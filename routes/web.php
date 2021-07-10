<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('news/{group?}','NewsController@index')->name('actile.list');
Route::get('news/info/{new?}','NewsController@show')->name('actile.show');
Route::get('companys/category/{category}','CompanyController@index')->name('company.list');
Route::get('companys/info/{company}','CompanyController@show')->name('company.show');
Route::get('user','UserController@index')->name('user.index');
Route::get('about','HomeController@about')->name('pages.about');
Route::get('statement','HomeController@statement')->name('pages.statement');
Route::get('agreement','HomeController@agreement')->name('pages.agreement');
Route::get('contactus','HomeController@contactus')->name('pages.contactus');
Route::get('most-new','CompanyController@newest')->name('company.newest');
Route::get('monitor','CompanyController@monitor')->name('company.monitor');
