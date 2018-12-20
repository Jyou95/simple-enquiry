<?php

Route::group(['namespace' => 'Jyou\Enquiry\Http\Controllers'], function(){

	Route::get('contact', 'EnquiryController@contact')->name('enquiry.contact');
	Route::post('send', 'EnquiryController@send')->name('enquiry.send');

});