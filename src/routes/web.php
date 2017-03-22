<?php
/**
 * Created by PhpStorm.
 * User: jharing10
 * Date: 2017/02/17
 * Time: 9:07 AM
 */

Route::group(['middleware' => ['web'],  'namespace' => 'EONConsulting\EmailSMS\Http\Controllers'], function() {

        // list all of the api's
        Route::any('/test', ['as' => 'eon.test', 'uses' => 'TestStencilController@test']);


        Route::match(['get', 'post'],'mailapp', 'HomeController@index');
Route::match(['get', 'post'],'sms/create', 'MailController@create'); 

Route::match(['get', 'post'],'mail/sendmail', 'MailController@sendmail');

Route::resource('mail', 'MailController');
//Route::resource('sms', 'MailController');




//Route::match(['get', 'post'],'sms', 'MailController@sms'); 
Route::match(['get', 'post'],'sms/bene', 'MailController@sendsms');


Route::resource('sms', 'HomeController');
Route::match(['get', 'post'],'sms', 'HomeController@sms'); 




       
});



