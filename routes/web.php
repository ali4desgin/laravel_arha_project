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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix("headquarter")->group(function (){
    Route::get('/', function () {
        return view('Headquarter.Dashboard');
    });

});



// office view routes
Route::prefix("officeview")->group(function (){

    // all projects routes
    Route::prefix("project")->group(function (){
        
        // create_proposal page
        Route::get('/new', 'OfficeEnd\ProjectController@create_proposal')->name("office_create_proposal");
        Route::post('/new_post', 'OfficeEnd\ProjectController@create_proposal_post')->name("office_create_proposal_post");

    });

    

});
