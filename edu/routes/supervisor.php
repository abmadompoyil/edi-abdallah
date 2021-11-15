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
    'middleware' => ['auth:web','supervisor'],
],
    function(){

        Route::get('/', 'Super\HomeController@index');
        Route::get('/meeting', 'Super\HomeController@meeting');
        Route::get('/user/edit', 'Super\HomeController@edit')->name('super.updates');
        Route::patch('/user/update', 'Super\HomeController@update')->name('super.updatesPost');

        /**
         * New Teacher Job
         */
        Route::resource('jobs','Super\JodController');
        Route::post('jobs/dest/{id}','Super\JodController@destroy')->name('jobs.catDelete');
        Route::post('jobs/comment/{id}','Super\JodController@add')->name('super.job.comments.add');
        Route::post('jobs/result/{id}','Super\JodController@result')->name('super.job.result.add');
        Route::post('jobs/result/update/{id}','Super\JodController@resultUpdate')->name('super.job.result.update');
        /**
         * New Move Teacher Job
         */
        Route::resource('jobs/move','Super\MoveTeacherController');
        Route::get('jobs/teacher/move','Super\MoveTeacherController@index');
        Route::get('jobs/move/show/{id}','Super\MoveTeacherController@show')->name('super.move.show1');
        Route::post('jobs/move/dest/{id}','Super\MoveTeacherController@destroy')->name('super.move.catDelete');
        Route::post('jobs/move/comment/{id}','Super\MoveTeacherController@add')->name('super.comments.add');
        /**
         * New Consult
         */
        Route::resource('consults','Super\ConsultController');
        Route::post('consults/dest/{id}','Super\ConsultController@destroy')->name('super.consults.catDelete');
        Route::post('consults/comment/{id}','Super\ConsultController@add')->name('super.consults.add');


        /*
       * Files
       */
        Route::get('files/{slug}','Super\HomeController@files');
        Route::post('files/','Super\HomeController@store')->name('super.files.store');

    });


