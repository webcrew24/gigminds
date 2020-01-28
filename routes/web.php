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

Route::get('/', 'HomeController@index')->name('home'); 

/*
Route::get('/jobs', function(){
    if (Auth::guest()) {
        return view('index-public');
    } else {
        $jobs = \App\Job::all()->sortByDesc("created_at");
        return view('jobs', ['jobs' => $jobs]);
    } 
});
*/

Route::get('/candidates', function(){
    if (Auth::guest()) {
        /* return  redirect()->route('home'); */
        return view('index-public');
    } else {
        return view('index-private');
    } 
});


Route::get('/gigs', function(){
    if (Auth::guest()) {
        /* return  redirect()->route('home'); */
        return view('index-public');
    } else {
        return view('index-private');
    } 
});


Route::get('/employers', function(){
    if (Auth::guest()) {
        /* return  redirect()->route('home'); */
        return view('index-public');
    } else {
        return view('index-private');
    } 
});


Route::get('/products', function(){
    if (Auth::guest()) {
        /* return  redirect()->route('home'); */
        return view('index-public');
    } else {
        return view('index-private');
    } 
});


Route::get('/services', function(){
    if (Auth::guest()) {
        /* return  redirect()->route('home'); */
        return view('index-public');
    } else {
        return view('index-private');
    } 
});


Route::get('/articles', function(){
    if (Auth::guest()) {
        /* return  redirect()->route('home'); */
        return view('index-public');
    } else {
        return view('index-private');
    } 
});

Route::post('signup', 'SignupController@store');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::post('jobs/inactive','JobController@jobUpdate')->name('jobUpdate');
    Route::post('jobs/jobFilters','JobController@jobFilters')->name('jobFilters');
    Route::resource('jobs','JobController');
    Route::resource('resumes','ResumeController');
});



/* Route::get('/home', 'HomeController@index')->name('home'); */
