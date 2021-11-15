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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
Route::get('/greeting/{locale}', 'HomeController@local');
Route::get('/library/{type}', 'IndexController@library');
Route::view('/asd','home');
Route::get('/test/notify','PagesController@test');
Route::get('/driver/notify','PagesController@test');
Route::post('/contact','PagesController@contact');
Route::view('/asdasd','soon');
Route::view('/','index');
Route::view('/terms','terms');
Route::view('/privacy','terms');
Route::get('setlocale/{locale}','IndexController@lang')->name('lang');
Route::get('school/login','School\HomeController@showLoginForm');
Route::get('/logouts','Auth\LoginController@logout');
Route::get('supervisor/login','Auth\LoginController@showLoginForm');

Route::group([
    'prefix' => 'admin',
], function () {
    Auth::routes(['register'=> false]);
    Route::get('forget','Password\PasswordController@forget')->name('password.forget');
    Route::post('reset','Password\PasswordController@reset')->name('password.reset');
    Route::post('code','Password\PasswordController@code')->name('password.code');
    Route::get('code/check','Password\PasswordController@check')->name('password.code.check');
    Route::group([
        'middleware' => ['auth:web','admin'],
    ],
        function()
        {

        Route::get('/', 'PagesController@index')->name('home');
        Route::get('/meetings', 'PagesController@meeting')->name('meeting');
        /**
         * Dates
         */
        Route::resource('date', 'Edu\DateController')->middleware('admin');
        Route::resource('meeting', 'Edu\DateController')->middleware('admin');
        Route::post('date/{id}','Edu\DateController@destroy')->name('dates.catDelete');
            /**
             * subjects
             */
        Route::resource('subjects', 'Edu\CategoryController')->middleware('admin');
        Route::post('subjects/{id}','Edu\CategoryController@destroy')->name('edu.catDelete');

        /*
         * Supervisor
         */
        Route::resource('supervisors', 'Edu\SuperVisorController');
        Route::get('supervisors/export/{slug}', 'Edu\SuperVisorController@export');
        Route::post('supervisor/dest/{id}','Edu\SuperVisorController@destroy')->name('supervisors.catDelete');

        /**
         * School
         */
        Route::resource('schools', 'Edu\SchoolsController');
        Route::post('schools/dest/{id}','Edu\SchoolsController@destroy')->name('schools.catDelete');
        Route::get('schools/jobs/{id}','Edu\SchoolsController@jobs')->name('jobs.school');
            Route::get('schools/export/{slug}', 'Edu\SchoolsController@export');


            /**
             * New Teacher Job
             */
            Route::resource('jobss','Edu\JodController');
            Route::get('jobss/show/{id}','Edu\JodController@show')->name('super.jobss.show1');
            Route::post('jobss/dest/{id}','Edu\JodController@destroy')->name('admin.jobs.catDelete');
            Route::post('jobss/comment/{id}','Edu\JodController@add')->name('admin.job.comments.add');
            Route::post('jobss/result/{id}','Edu\JodController@result')->name('admin.job.result.finished');
            Route::get('jobs/export/{slug}/', 'Edu\JodController@export')->name('jobss.download');
            Route::post('jobsss/result/{id}','Edu\JodController@resultAdd')->name('jobss.result.add');
            Route::post('jobss/result/update/{id}','Edu\JodController@resultUpdate')->name('jobss.result.update');
            /**
             * New Move Teacher Job
             */
            Route::resource('jobss/move','Edu\MoveTeacherController');
            Route::get('jobss/teacher/move','Edu\MoveTeacherController@index');
            Route::get('jobss/move/show/{id}','Edu\MoveTeacherController@show')->name('jobss.move.show1');
            Route::post('jobss/move/dest/{id}','Edu\MoveTeacherController@destroy')->name('jobss.move.catDelete');
            Route::post('jobss/move/comment/{id}','Edu\MoveTeacherController@add')->name('jobss.comments.add');
            Route::get('jobs/move/export/{slug}/', 'Edu\MoveTeacherController@export')->name('jobss.move.download');

//            Route::get('jobss/download/comment/{id}','Edu\MoveTeacherController@add')->name('jobss.comments.add');
            /**
             * New Consult
             */
            Route::resource('consultss','Edu\ConsultController');
            Route::get('consults/show/{id}','Edu\ConsultController@show')->name('admin.consults.show');

            Route::post('consults/dest/{id}','Edu\ConsultController@destroy')->name('admin.consults.catDelete');
            Route::post('consults/comment/{id}','Edu\ConsultController@add')->name('admin.consults.add');
            /**
             *
             * Files Library
             */
//            Route::resource('files','Edu\LibraryController');

            Route::get('files/{slug}','Edu\LibraryController@index');
            Route::post('files/{id}','Edu\LibraryController@destroy')->name('files.catDelete');
            Route::get('files/edit/{id}','Edu\LibraryController@update')->name('files.update');
            Route::post('files/','Edu\LibraryController@store')->name('files.store');


            Route::prefix('front')->group(function () {
            Route::get('ar/section1','FrontController@ar');
            Route::get('ar/section3','FrontController@ar2');
            Route::get('ar/section4','FrontController@ar4');
            Route::get('ar/section5','FrontController@ar5');
            /**
             * En
             */
            Route::get('en/section1','FrontController@en');
            Route::get('en/section3','FrontController@en2');
            Route::get('en/section4','FrontController@en4');
            Route::get('en/section5','FrontController@en5');


            Route::patch('ar/post','FrontController@ar_post')->name('ar.post');
            Route::patch('en/post','FrontController@en_post')->name('en.post');
            Route::patch('ar/post/{service}','FrontController@ar_srevice')->name('ar.service');
            Route::patch('ar/question/{question}','FrontController@ar_question')->name('ar.question');
            Route::post('ar/question/create','FrontController@questionCreate')->name('ar.question.create');


        });


//        Route::prefix('user')->group(function () {
//            Route::get('client', 'User\UserController@client');
//            Route::get('client/search/{value?}', 'User\UserController@search');
//            Route::resource('user', 'User\UserController');
//            Route::get('download/csv/{type?}', 'User\UserController@download');
//            Route::get('user/order/{id}','User\UserController@userOrders')->name('users.userOrder');
//            Route::get('UserEdit/{id}','User\UserController@edit')->name('users.UserEdit');
//            Route::post('UserDelete/{user}','User\UserController@destroy')->name('users.UserDelete');
//            Route::get('user/lessons/{id}','User\UserController@userLessons')->name('users.userLessons');
//            /** driver */
//            Route::get('drivers', 'User\DriverController@drivers');
//            Route::get('driver/order/{id}','User\DriverController@driverOrders')->name('driver.userOrder');
//            Route::get('driver/create/','User\DriverController@create')->name('driver.create');
//            Route::get('driver/edit/{id}','User\DriverController@edit')->name('drivers.edit');
//            Route::post('driver/destroy/{id}','User\DriverController@destroy')->name('drivers.destroy');
//            Route::post('driver/store/','User\DriverController@store')->name('drivers.store');
//            Route::patch('driver/update/{id}','User\DriverController@update')->name('drivers.update');
//
//            /** Teacher */
//            Route::get('teachers', 'User\TeacherController@teachers');
//            Route::get('teacher/lessons/{id}','User\TeacherController@teacherLessons')->name('teacher.userLessons');
//            Route::get('teacher/create/','User\TeacherController@create')->name('teacher.create');
//            Route::get('teacher/edit/{id}','User\TeacherController@edit')->name('teachers.edit');
//            Route::post('teacher/destroy/{id}','User\TeacherController@destroy')->name('teachers.destroy');
//            Route::post('teacher/store/','User\TeacherController@store')->name('teachers.store');
//
//            Route::patch('teacher/update/{User}','User\TeacherController@update')->name('teachers.update');
//            /** Admin */
//            Route::resource('admin', 'User\AdminController');
//            Route::get('adminEdit/{id}','User\AdminController@edit')->name('admin.UserEdit');
//            Route::post('adminDelete/{user}','User\AdminController@destroy')->name('admin.UserDelete');
//        });





// Quick search dummy route to display html elements in search dropdown (header search)
        Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');




    });
    Route::group([
        'middleware' => ['auth:web','admin'],
    ],
        function()
        {
    });


});





// Demo routes

