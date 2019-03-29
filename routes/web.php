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

Route::get ('/',            ['as'=>'site.home','uses'        =>'Site\HomeController@index']);
Route::get ('/option-login',['as'=>'site.option-login','uses'=>'Site\HomeController@option']);

/*
|---------------------------------------------------------------------------
| Routes Authentication
|---------------------------------------------------------------------------
*/

Route::get ('/login',    ['as'=>'login','uses'    =>'Site\LoginController@index']);
Route::post('/login/in', ['as'=>'login.in','uses' =>'Site\LoginController@in']);
Route::get ('/login/out',['as'=>'login.out','uses'=>'Site\LoginController@out']);


Route::group(['middleware'=>'auth'],function(){

    Route::get ('/services',['as'=>'services','uses'=>'Site\SiteController@index']);

    /*
    |---------------------------------------------------------------------------
    | Routes Service Keys
    |---------------------------------------------------------------------------
    */

    Route::get ('/services/key',          ['as'=>'services.key','uses'          =>'Site\KeyController@index']);
    Route::get ('/services/key/in',       ['as'=>'services.key.in','uses'       =>'Site\KeyController@in']);
    Route::get ('/services/key/out',      ['as'=>'services.key.out','uses'      =>'Site\KeyController@out']);

    Route::get ('/services/key/out/code', ['as'=>'services.key.out.code','uses' =>'Site\KeyController@code']);

    Route::get ('/services/key/out/filter/place',['as'=>'services.key.out.filter.place','uses'=>'Site\KeyController@place']);
    Route::get ('/services/key/out/filter/floor',['as'=>'services.key.out.filter.floor','uses'=>'Site\KeyController@floor']);

    /*
    |---------------------------------------------------------------------------
    | Routes Service Correspondence
    |---------------------------------------------------------------------------
    */

    Route::get ('/services/correspondence',    ['as'=>'services.correspondence','uses'    =>'Site\CorrespondenceController@index']);
    Route::get ('/services/correspondence/in', ['as'=>'services.correspondence.in','uses' =>'Site\CorrespondenceController@in']);
    Route::get ('/services/correspondence/out',['as'=>'services.correspondence.out','uses'=>'Site\CorrespondenceController@out']);

    /*
    |---------------------------------------------------------------------------
    | Routes Service Cars
    |---------------------------------------------------------------------------
    */

    Route::get ('/services/car',                       ['as'=>'services.car','uses'                       =>'Site\CarController@index']);
    Route::get ('/services/car/in',                    ['as'=>'services.car.in','uses'                    =>'Site\CarController@in']);
    Route::get ('/services/car/in/quiz/{id}',          ['as'=>'services.car.in.quiz','uses'               =>'Site\CarController@quiz']);
    Route::post('/services/car/in/quiz/post',          ['as'=>'services.car.in.quiz.post','uses'          =>'Site\CarController@quizPost']);
    Route::get ('/services/car/in/finish',             ['as'=>'services.car.in.finish','uses'             =>'Site\CarController@inFinish']);
    # CARS OUT => DRIVER
    Route::get ('/services/car/out',                   ['as'=>'services.car.out','uses'                   =>'Site\CarController@out']);
    # DRIVER YES
    Route::get ('/services/car/out/driver/yes',        ['as'=>'services.car.out.driver.yes','uses'        =>'Site\CarController@driverYes']);
    Route::get ('/services/car/out/list/cars',         ['as'=>'services.car.out.list.cars','uses'         =>'Site\CarController@carsList']);
    Route::post('/services/car/out/list/car/select',   ['as'=>'services.car.out.list.car.select','uses'   =>'Site\CarController@carSelect']);
    # DRIVER NO
    Route::get ('/services/car/out/driver/no',         ['as'=>'services.car.out.driver.no','uses'         =>'Site\CarController@driverNo']);
    Route::get ('/services/car/out/list/drivers',      ['as'=>'services.car.out.list.drivers','uses'      =>'Site\CarController@driversList']);
    Route::post('/services/car/out/list/driver/select',['as'=>'services.car.out.list.driver.select','uses'=>'Site\CarController@driverSelect']);
    # DRIVER ALL
    Route::get ('/services/car/out/list/places',       ['as'=>'services.car.out.list.places','uses'       =>'Site\CarController@placesList']);
    Route::post('/services/car/out/list/place/select', ['as'=>'services.car.out.list.place.select','uses' =>'Site\CarController@placeSelect']);
    Route::get ('/services/car/out/summary',           ['as'=>'services.car.out.summary','uses'           =>'Site\CarController@summary']);
    Route::post('/services/car/out/summary/confirm',   ['as'=>'services.car.out.summary.confirm','uses'   =>'Site\CarController@confirm']);
    Route::get ('/services/car/out/receipt',           ['as'=>'services.car.out.receipt','uses'           =>'Site\CarController@receipt']);
    Route::get ('/services/car/out/receipt/print',     ['as'=>'services.car.out.receipt.print','uses'     =>'Site\CarController@print']);
    Route::get ('/services/car/out/finish',            ['as'=>'services.car.out.finish','uses'            =>'Site\CarController@outFinish']);
});

//Auth::routes();

Route::get('/home', 'Site\HomeController@index')->name('home');

