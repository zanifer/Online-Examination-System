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

Auth::routes();


//Route::get('/admin', 'AdminController@admin')    
//->middleware('auth','admin');
//admin panel
Route::get('/admin', 'AdminController@admin')->name('admin')->middleware('auth','admin');
Route::get('/admin_manage', 'AdminController@admin_manage')->name('admin_manage')->middleware('auth','admin');

Route::get('/edit/{id}', 'AdminController@edit')->name('edit')->middleware('auth','admin');
Route::post('/update/{id}','AdminController@update')->name('update')->middleware('auth','admin');
Route::post('/delete/{id}','AdminController@delete')->name('delete')->middleware('auth','admin');
//Route::get('/admin_add_user','AdminController@admin_add_user')->name('admin_add_user')->middleware('auth','admin');
//Route::post('/store', 'AdminController@store')->name('store')->middleware('auth','admin');


 //teacher panel
Route::get('/teacher', 'TeacherController@teacher')->name('teacher')->middleware('auth','teacher');
Route::get('/home', 'HomeController@index')->name('home');

//question
Route::get('/add_ques','QuestionController@add_ques')->middleware('auth','teacher');
Route::get('/question_edit/{id}', 'TeacherController@question_edit')->name('question_edit')->middleware('auth','teacher');
Route::post('/update/{id}','TeacherController@update')->name('update')->middleware('auth','teacher');
Route::post('/delete/{id}','TeacherController@delete')->name('delete')->middleware('auth','teacher');
Route::post('/store', 'TeacherController@store')->name('store')->middleware('auth','teacher');
Route::get('/questionList', 'TeacherController@questionList')->name('questionList')->middleware('auth','teacher');;

//student panel
Route::get('/student', 'StudentController@student')
->middleware('auth','student');
Route::get('/start_exam', 'StudentController@start_exam')->name('start_exam')->middleware('auth','student');

Route::get('/result_count','StudentController@count')->name('count')->middleware('auth','student');
