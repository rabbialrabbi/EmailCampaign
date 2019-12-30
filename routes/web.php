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

use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email','MailController@show');
Route::post('/email','MailController@send');



Route::get('/age',function(){

    return view('ageCalculation');
//    Carbon::parse($age)->timestamp()
});

Route::post('/age', function(){
//    $age = Carbon::parse($_POST['dob'])->age;
    $age=Carbon::parse(now())->diff(Carbon::parse($_POST['dob']))->format('%y Years, %m month  %d day');
    return view('ageCalculation',[
        'name'=> $_POST['name'],
        'age'=>$age
    ]);
});
