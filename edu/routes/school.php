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



Route::group([
    'middleware' => ['auth:web','school'],
],
    function(){

            Route::get('/', 'School\HomeController@index');
            Route::get('/meeting', 'School\HomeController@meeting');
            Route::get('/user/edit', 'School\HomeController@edit')->name('school.updates');
            Route::patch('/user/update', 'School\HomeController@update')->name('school.updatesPost');

        /**
         * New Teacher Job
         */
        Route::resource('job','School\JodController');
        Route::post('job/dest/{id}','School\JodController@destroy')->name('job.catDelete');
        Route::post('job/comment/{id}','School\JodController@add')->name('comments.add');
        Route::post('job/result/{id}','School\JodController@result')->name('result.add');
        Route::post('job/result/update/{id}','School\JodController@resultUpdate')->name('result.update');
        Route::get('job/download/{id}','School\JodController@print')->name('job.downloadsss');

        /**
         * New Move Teacher Job
         */
        Route::resource('job/move','School\MoveTeacherController');
        Route::get('job/teacher/move','School\MoveTeacherController@index');
        Route::get('job/move/show/{id}','School\MoveTeacherController@show')->name('move.show1');
        Route::get('job/move/download/{id}','School\MoveTeacherController@print')->name('move.download');
        Route::post('job/move/dest/{id}','School\MoveTeacherController@destroy')->name('move.catDelete');
        Route::post('job/move/comment/{id}','School\MoveTeacherController@add')->name('commentsss.add');
        Route::post('job/move/','School\MoveTeacherController@store')->name('move.storess');
        /**
         * New Consult
         */
        Route::resource('consult','School\ConsultController');
        Route::post('consult/dest/{id}','School\ConsultController@destroy')->name('consult.catDelete');
        Route::post('consult/comment/{id}','School\ConsultController@add')->name('consult.add');
//        Route::post('consult/comment/{id}','School\ConsultController@add')->name('consult.add');


        /*
         * Files
         */
        Route::get('files/{slug}','School\HomeController@files');
        Route::post('files/','School\HomeController@store')->name('school.files.store');

    });
