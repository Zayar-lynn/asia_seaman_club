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
//testingh

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
});
//****************************************
Route::get('/company-register','Controller@company_register');
Route::get('get_all_country','Controller@get_country_list');
Route::post('api/login','Controller@api_login');

//*************************************
Route::get('/','Controller@index');

Route::get('/about-us', function () {
    return view('user/about-us');
});
Route::get('/job-listing','CompanyController@show_jobpost');

Route::get('/job_detail/{job_id}','CompanyController@job_detail');

Route::get('/e-learning','CourseController@show_course');

Route::get('/course_detail/{course_id}','CourseController@course_detail');

Route::get('/company','CompanyController@show_company');

Route::get('/training','CompanyController@show_training');

Route::get('/training_detail/{training_id}','CompanyController@training_detail');

Route::get('/blog-grid', 'AdminBlogController@show_blog');

Route::get('/blog_detail/{blog_id}','AdminBlogController@blog_detail');

Route::get('/freeagent','CompanyController@show_freeagent');

Route::get('/contact-us', function () {
    return view('user/contact-us');
});
Route::get('/register',function(){
	return view('user/register');
});


Route::get('/employee-register',function(){
	return view('user/employee-register');
});
Route::get('/free_agent-register',function(){
	return view('user/freeagent_register');
});
Route::get('/teacher-register',function(){
	return view('user/teacher-register');
});
Route::get('/login',function(){
	return view('user/login');
});

Route::get('/company_profile',function(){
    return view('user/company_profile');
});

Route::get('/company_profile/{company_id}','CompanyController@company_profile');

Route::get('/apply/{company_id}/{post_id}','SeafarerController@request');

Route::post('login','Controller@login');
Route::get('/logout','Controller@logout');

Route::post('/teacherregister','RegisterController@teacherregister');

Route::post('/get_all_teacher_acc','RegisterController@get_all_teacher_acc');

Route::post('/delete/teacher_acc/{id}','RegisterController@destroy');
//*****************************************
Route::post('api/businessregister','RegisterController@businessregister');

Route::post('/seafarerregister','RegisterController@seafarerregister');

Route::post('api/freeagentregister','RegisterController@freeagentregister');
Route::post('api/upload_freeman_photo','RegisterController@upload_freeman_photo');

Route::post('/contact','ContactController@store');

//Teacher dashboard
Route::get('/teacher_dashboard',function(){
    return view('admin.teacher_admin.dashboard')->with(['url'=>'dashboard']);
 });

 Route::get('/teacher_dashboard/company_profile',function(){
     return view('admin.teacher_admin.company_profile')->with(['url'=>'company_profile']);
 //    return 'aa';
 });
 Route::get('/teacher_dashboard/company_list',function(){
     return view('admin.teacher_admin.company_list')->with(['url'=>'company_list']);
 });
 Route::get('/teacher_dashboard/category',function(){
     return view('admin.teacher_admin.category')->with(['url'=>'category']);
 });
 Route::get('/teacher_dashboard/blog',function(){
     return view('admin.teacher_admin.blog')->with(['url'=>'blog']);
 });
 Route::get('/teacher_dashboard/feedback',function(){
     return view('admin.teacher_admin.feedback')->with(['url'=>'feedback']);
 });
//  Route::get('/teacher_dashboard/course',function(){
//     return view('admin.teacher_admin.course')->with(['url'=>'course']);
// });
Route::get('/teacher_dashboard/course','CourseController@index');
// Route::get('/test','CourseController@get_all_course');
Route::post('/insert/course','CourseController@store');

Route::post('/get_all_course','CourseController@get_all_course');

Route::post('/delete/teacher_course/{id}','CourseController@destroy');

Route::post('/edit/teacher_course/{id}','CourseController@edit');

Route::post('/update/course','CourseController@update');


//Admin Dashboard
Route::get('/admin',function(){
    return view('admin.site_admin.dashboard')->with(['url'=>'dashboard']);
 });

Route::get('/admin/company_profile',function(){
     return view('admin.site_admin.company_profile')->with(['url'=>'company_profile']);
 //    return 'aa';
 });
// Route::get('/admin/company_list',function(){
//      return view('admin.site_admin.company_list')->with(['url'=>'company_list']);
//  });
Route::get('/admin/company_list','CompanyController@show_companylist_table');
Route::post('/get_all_company_list','CompanyController@get_all_company_list');
Route::post('/get_all_company_training_list','CompanyController@get_all_company_training_list');
Route::post('/get_all_company_freeagent_list','CompanyController@get_all_company_freeagent_list');

Route::post('/admin/edit/company_list/{id}','CompanyController@company_edit');
Route::post('/update/company_list','CompanyController@company_update');
Route::post('/admin/delete/company_list/{id}','CompanyController@company_delete');

Route::get('/admin/category',function(){
     return view('admin.site_admin.category')->with(['url'=>'category']);
 });
Route::get('/admin/blog',function(){
     return view('admin.site_admin.blog')->with(['url'=>'blog']);
 });
Route::post('/insert/blog','AdminBlogController@insert');

Route::post('/get_all_blog','AdminBlogController@get_all_blog');

Route::post('/admin/delete/admin_blog/{id}','AdminBlogController@destroy');

Route::post('/admin/edit/admin_blog/{id}','AdminBlogController@edit');

Route::post('/update/blog','AdminBlogController@update');

Route::get('/admin/testimonial',function(){
    return view('admin.site_admin.testimonial')->with(['url'=>'testimonial']);
});
Route::post('/insert/testimonial','TestimonialController@insert');

Route::post('/get_all_testimonial','TestimonialController@get_all_testimonial');

Route::post('/admin/delete/testimonial/{id}','TestimonialController@destroy');

Route::post('/admin/edit/testimonial/{id}','TestimonialController@edit');

Route::post('/update/testimonial','TestimonialController@update');

Route::get('/admin/feedback',function(){
     return view('admin.site_admin.feedback')->with(['url'=>'feedback']);
});
Route::get('/admin/teacher_account',function(){
    return view('admin.site_admin.teacher_account')->with(['url'=>'teacher_acc']);
});

Route::get('/admin/ads','AdsController@index');

Route::post('/insert/ads','AdsController@insert');

Route::post('/get_all_ads','AdsController@get_all_ads');

Route::post('/admin/delete/ads/{id}','AdsController@destroy');

Route::post('/admin/edit/ads/{id}','AdsController@edit');

Route::post('/update/ads','AdsController@update');

Route::get('/admin/contact','ContactController@show');

Route::post('/create_or_edit_ads','AdsController@create_or_edit_ads');
Route::post('api/all_ads','AdsController@all_ads');
Route::post('delete_ads/{id}','AdsController@delete');

Route::get('/admin/post_confirm','PostConfirmController@index');
Route::post('/get_all_confirm_post','PostConfirmController@get_all_confirm_post');
Route::post('/active/pending_post/{id}','PostConfirmController@active_post');
Route::post('/delete/pending_post/{id}','PostConfirmController@destroy');

Route::get('/admin/post','PostController@view_admin_post');
Route::post('/insert/admin_post','PostController@insert_admin_post');
Route::post('api/upload_admin_post_photo','PostController@upload_admin_post_photo');
Route::post('/get_all_admin_post','PostController@get_all_admin_post');

//Company Dashboard
Route::get('/company_dashboard','CompanyController@index');

Route::get('/company_dashboard/company_profile','CompanyController@edit_company_profile');

Route::get('/company_dashboard/company_photo','CompanyController@edit_company_photo');

Route::post('/company/photo_detail/{id}','CompanyController@company_photo_detail');

Route::post('/update/company_photo','CompanyController@update_companyphoto');


//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
// TrainingPost*******************************
//start training post
Route::post('api/insert/training_post','CompanyController@insert_training_post');
Route::post('api/edit_training_post/{id}','CompanyController@edit_training_post');
Route::get('api/confirm_training_post/{post_id}','CompanyController@confirm_training_post');
Route::get('api/delete_training_post/{post_id}','CompanyController@delete_training_post');
Route::get('api/pending_training_posts','CompanyController@pending_training_posts');
Route::post('api/upload_training_post_photo','CompanyController@upload_training_post_photo');
Route::get('api/post/{post_id}','CompanyController@post_detail');

// Route::get('api/active_training_posts','CompanyController@active_training_posts');
//end

// jobpost
Route::get('/company_dashboard/jobpost','CompanyController@company_jobpost');
Route::post('api/upload_job_post_photo','CompanyController@upload_job_post_photo');
Route::post('api/insert/jobpost','CompanyController@insert_jobpost');
Route::post('/get_all_jobpost','CompanyController@get_all_jobpost');
Route::get('api/delete/jobpost/{id}','CompanyController@destroy');
Route::post('api/edit/jobpost/{id}','CompanyController@edit');
Route::get('api/get_job_position','Controller@get_job_position');
Route::get('api/get_vessel_type','Controller@get_vessel_type');

//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//start application
Route::get('active_normal_posts','ApplicationController@active_normal_posts');//newfeed
Route::get('active_job_posts','ApplicationController@active_job_posts');
Route::get('active_training_posts','ApplicationController@active_training_posts');
// Route::get('active_posts','ApplicationController@active_posts');

Route::get('shipmate','ApplicationController@shipmate');

Route::get('job_post_detail/{id}','ApplicationController@JobPostDetail');
Route::get('training_post_detail/{id}','ApplicationController@TrainingPostDetail');
Route::get('normal_post_detail/{id}','ApplicationController@NormalPostDetail');

Route::get('newfeed_ads','ApplicationController@newfeed_ads');
Route::get('training_ads','ApplicationController@training_ads');
Route::get('job_ads','ApplicationController@jobpost_ads');
Route::get('shipmate_ads','ApplicationController@shipmate_ads');


// seafarer
Route::post('api/upload_normal_post','PostController@upload_seafarer_post_photo');
Route::post('api/insert/normal_post','PostController@insert_seafarer_post');
Route::get('api/delete_normal_post/{post_id}','PostController@delete_normal_post');
Route::post('api/edit_normal_post/{id}','PostController@edit_normal_post');

Route::post('api/insert/seafarer_request','SeafarerController@seafarer_request');
//Route::post('/update/jobpost','CompanyController@update');
//*****************************************
//comment
Route::post('api/create_comment','ApplicationController@create_comment');
Route::post('api/edit_comment/{id}','ApplicationController@edit_comment');
Route::get('delete_comment/{id}','ApplicationController@delete_comment');
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
//*****************************************
Route::get('/company_dashboard/company_list',function(){
    return view('admin.company_admin.company_list')->with(['url'=>'company_list']);
});
Route::get('/company_dashboard/category',function(){
    return view('admin.company_admin.category')->with(['url'=>'category']);
});
Route::get('/company_dashboard/blog',function(){
    return view('admin.company_admin.blog')->with(['url'=>'blog']);
});
Route::get('/company_dashboard/feedback',function(){
    return view('admin.company_admin.feedback')->with(['url'=>'feedback']);
});


//Training Dashboard
Route::get('/training_dashboard','TrainingController@index');

Route::get('/training_dashboard/company_profile',function(){
    return view('admin.training_admin.company_profile')->with(['url'=>'company_profile']);
//    return 'aa';
});
Route::get('/training_dashboard/company_list',function(){
    return view('admin.training_admin.company_list')->with(['url'=>'company_list']);
});
Route::get('/training_dashboard/category',function(){
    return view('admin.training_admin.category')->with(['url'=>'category']);
});
Route::get('/training_dashboard/blog',function(){
    return view('admin.training_admin.blog')->with(['url'=>'blog']);
});
Route::get('/training_dashboard/feedback',function(){
    return view('admin.training_admin.feedback')->with(['url'=>'feedback']);
});
Route::get('/training_dashboard/training_course','TrainingController@training_course');

Route::post('/insert/training_course','TrainingController@store');

Route::post('/get_all_trainingcourse','TrainingController@get_all_trainingcourse');

Route::post('/delete/training_course/{id}','TrainingController@destroy');

Route::post('/edit/training_course/{id}','TrainingController@edit');

Route::post('/update/training_course','TrainingController@update');

Route::get('/training_dashboard/company_photo','CompanyController@edit_company_photo');

//Route::post('/company/training/photo_detail/{id}','TrainingController@company_photo_detail');


Route::post('/update/training/company_photo','TrainingController@update_companyphoto');

//Seafarer Dashboard
Route::get('/serfarer_over-view',function(){
	return view('user.over-view');
});
Route::get('/serfarer_cv-profile',function(){
    return view('user.cv-profile');
//    return 'aa';
});
Route::get('/serfarer_buy-coin',function(){
    return view('user.pricing');
});
Route::get('/serfarer_coin-transition',function(){
    return view('user.coin-transition');
});
Route::get('/serfarer_coin-history',function(){
    return view('user.coin-history');
});




//Freeagent Dashboard
Route::get('/freeagent_dashboard',function(){
	return view('admin.freeagent_admin.dashboard')->with(['url'=>'dashboard']);
});
Route::get('/freeagent_dashboard/job_post','FreeagentController@freeagent_jobpost');

Route::post('/insert/freeagent_jobpost','FreeagentController@insert_jobpost');

Route::post('/get_all_freeagent_jobpost','FreeagentController@get_all_jobpost');

Route::post('/delete/freeagent_jobpost/{id}','FreeagentController@destroy');

Route::post('/edit/freeagent_jobpost/{id}','FreeagentController@edit');

Route::post('/update/freeagent_jobpost','FreeagentController@update');

Route::get('/freeagent_dashboard/company_profile',function(){
    return view('admin.freeagent_admin.company_profile')->with(['url'=>'company_profile']);
//    return 'aa';
});
Route::get('/freeagent_dashboard/company_list',function(){
    return view('admin.freeagent_admin.company_list')->with(['url'=>'company_list']);
});
Route::get('/freeagent_dashboard/category',function(){
    return view('admin.freeagent_admin.category')->with(['url'=>'category']);
});
Route::get('/freeagent_dashboard/blog',function(){
    return view('admin.freeagent_admin.blog')->with(['url'=>'blog']);
});
Route::get('/freeagent_dashboard/feedback',function(){
    return view('admin.freeagent_admin.feedback')->with(['url'=>'feedback']);
});



// for api

Route::post('api/ascandroid/businessregister/','RegisterController@businessregister');
Route::post('api/ascandroid/seafarerregister/','RegisterController@seafarerregister');
Route::post('api/ascandroid/teacherregister/','RegisterController@teacherregister');

Route::get('api/{ascandroid}/get_all_jobpost/','CompanyController@get_all_jobpost_android');
Route::get('api/{ascandroid}/get_all_trainingcourse','TrainingController@get_all_trainingcourse_android');
Route::get('api/{ascandroid}/get_all_course','CourseController@get_all_course_android');
Route::get('api/{ascandroid}/get_all_blog','AdminBlogController@get_all_blog_android');
Route::get('api/{ascandroid}/job_detail/{job_id}','CompanyController@job_detail_android');
Route::get('api/{ascandroid}/company_profile/{company_id}','CompanyController@company_profile_android');
Route::get('api/{ascandroid}/training_detail/{training_id}','CompanyController@training_detail_android');
Route::get('api/{ascandroid}/course_detail/{course_id}','CourseController@course_detail_android');
Route::get('api/{ascandroid}/blog_detail/{blog_id}','AdminBlogController@blog_detail_android');



Route::get('test','ApplicationController@active_training_posts');
