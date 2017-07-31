<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('value', 'HomeController@value')->name('value');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/consulting', 'HomeController@consult')->name('consult');
Route::get('/employee', 'HomeController@employee')->name('employee');
Route::get('/human', 'HomeController@human')->name('human');
Route::get('/business', 'HomeController@business')->name('business');
Route::get('/marine', 'HomeController@marine')->name('marine');
Route::get('/case', 'HomeController@case1')->name('case1');
Route::get('/academy', 'HomeController@academy')->name('academy');
Route::get('/success', 'HomeController@success')->name('success');
Route::get('/success1', 'HomeController@success1')->name('success1');
Route::get('/success2', 'HomeController@success2')->name('success2');

Route::get('/cr', 'HomeController@cr')->name('cr');
Route::post('/store-contact', 'HomeController@storecontact')->name('store.contact');
Route::post('/store-job3', 'HomeController@storejob3')->name('store.job3');



Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/job', 'HomeController@job')->name('job');
Route::get('/job1', 'HomeController@job1')->name('job1');
Route::get('/job11', 'HomeController@job11')->name('job11');
Route::get('/job2', 'HomeController@job2')->name('job2');
Route::get('/job3', 'HomeController@job3')->name('job3');

Route::group([ 'middleware' => ['auth']], function () {
Route::get('/admin', 'AdminController@Index')->name('admin.home');
Route::get('/alljob', 'AdminController@Job')->name('admin.job');
Route::get('/all', 'AdminController@AllRole')->name('admin.role');

Route::post('/store-jd', 'AdminController@Jd')->name('store.jd');
Route::post('/delete-jd/{id}', 'AdminController@DeleteJd')->name('delete.jd');
 });

Route::get('/jobadmin/{id}', 'HomeController@Jobadmin')->name('jobadmin');
Route::get('/jobadmin/{id}/edit', 'AdminController@EditRole')->name('admin.edit');
Route::patch('/jobadmin/{id}/update', 'AdminController@update')->name('admin.update');

Route::get('/abcx\zcxcout', function () {
    return view('about');
});



Route::group(['prefix'=>'user'], function(){

Route::group(['middleware'=> 'guest'], function(){

    Route::get('/signup', [
    'uses'=>'UserController@getSignup',
    'as' => 'user.signup'
    ]);
    
Route::post('/signup', [
    'uses'=>'UserController@postSignup',
    'as' => 'user.signup'
    ]);

Route::get('/signin', [
    'uses'=>'UserController@getSignin',
    'as' => 'user.signin'
    ]);

Route::post('/signin', [
    'uses'=>'UserController@postSignin',
    'as' => 'user.signin'
    ]);
});

Route::group(['middleware'=> 'auth'], function(){

Route::get('/profile', [
    'uses'=>'UserController@getProfile',
    'as' => 'user.profile'
    ]);

Route::get('/Logout', [
    'uses'=>'UserController@getLogout',
    'as' => 'user.logout'
    ]);
});
});

