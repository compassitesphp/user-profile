<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
//route for technology
Route::get('/tech','HomeController@techList');
Route::get('/add','HomeController@doAddTech');
Route::get('/add1','HomeController@tech1');
//route for department

Route::get('/dept','HomeController@deptlist');
Route::get('/addDept','HomeController@doAddDept');
Route::get('/addDept1','HomeController@dept1');
//route for adding new employee
Route::get('/emplist','HomeController@empList');
Route::get('/addEmp','HomeController@doAddEmployee');

//route for editing employee form

Route::get('{id}/edit','HomeController@doProfileEdit');
Route::get('edit2','HomeController@editprofile');
