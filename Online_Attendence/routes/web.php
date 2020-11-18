<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('frontend/index');
// });
Route::get('/','FrontendController@home')->name('mainpage');


Route::get('teacherdetail/{id}','FrontendController@teacherdetail')->name('teacherdetail');
Route::get('studentdetail','FrontendController@studentdetail')->name('studentdetail');
Route::get('signin','FrontendController@signin')->name('signinpage');
Route::get('signup','FrontendController@signup')->name('signuppage');






// ========= By KZW ==========

Route::resource('attendance','AttendanceController');
Route::resource('checkattendance','CheckattendanceController');

// =====================================================================



Route::get('/admine','AdminController@index')->name('admin');

Route::resource('teacher', 'TeacherController');

Route::resource('course', 'CourseController');

Route::resource('student', 'StudentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


