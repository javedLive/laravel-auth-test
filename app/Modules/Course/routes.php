<?php

Route::group(array('module' => 'Course', 'namespace' => 'App\Modules\Course\Controllers','middleware' => ['web','auth']), function() {

    Route::resource('course', 'CourseController');
    Route::get('/nameAutocomplete',[
    	'uses'=>'CourseController@searchCourse',
    	'as'=>'nameAutocomplete'
    	]);
});	