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

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/', 'PageController@home');

Route::group(['middleware' => 'guest'], function () {
	//to register student
    Route::get('/register/student', 'RegistrationController@register');
	Route::post('/register', 'RegistrationController@postRegister');

	//to register teacher
	Route::get('/register/faculty', 'RegistrationController@registerFaculty');
	Route::post('/registerfaculty', 'RegistrationController@postRegisterFaculty');

	//routes to login
	Route::get('/login', 'LoginController@login');
	Route::post('/login', 'LoginController@postLogin');

});
Route::group(['middleware' => 'student'], function () {
	Route::get('/response','ResponsesController@index');
	Route::post('/response','ResponsesController@store');
	Route::get('/response/{id}','ResponsesController@show');
	Route::get('/response/{id}/edit','ResponsesController@edit');
	Route::get('/stsurveys','StudentController@surveys');
    
});
Route::group(['middleware' => 'faculty'], function () {
	
	Route::resource('survey', 'SurveyController');
	Route::post('/survey/create/addmcq', 'QuestionController@addMcq');
	Route::post('/survey/create/addpara', 'QuestionController@addParagraph');
	Route::post('/survey/create/addtext', 'QuestionController@addText');
	Route::post('/survey/create/addSection', 'QuestionController@addSection');
    Route::post('/survey/create/addDate', 'QuestionController@addDate');
    Route::post('/survey/create/adddropdown', 'QuestionController@adddropdown');
    Route::get('/surveycommittee','CommitteeController@index');
    Route::get('/submitsurvey','TeacherController@submitSurvey');
    Route::get('/result/{id}','TeacherController@result');

});

Route::group(['middleware' => 'head'], function () {
	
	Route::resource('committee', 'CommitteeController');
    
});

Route::group(['middleware' => 'admin'], function () {
	//routes to create and manage department
	Route::get('/dept','DeptController@index'); 
	Route::get('/dept/create','DeptController@create');
	Route::post('/createdept','DeptController@store');	
	Route::delete('/dept/{id}','DeptController@destroy');
    //routes to create and manage course
    Route::get('/course','CoursesController@index');
    Route::get('/course/create','CoursesController@create');
	Route::post('/createcourse','CoursesController@store');
	Route::delete('/course/{id}','CoursesController@destroy');
	//other routes
	Route::get('/surveys','AdminController@showSurvey');
	Route::delete('/surveys/{id}','AdminController@destroySurvey');
	Route::get('/committees','AdminController@committee');
	Route::delete('/committees/{id}','AdminController@destroyCommittee');

	Route::resource('/school','SchoolController');
	Route::resource('/enroll','EnrollController');

});

Route::post('/logout', 'LoginController@logout');


	//will tranfared to admin groupp
