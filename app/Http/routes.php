<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout',['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('administrator',['middleware' => 'auth', 'as' => 'admin_home','uses' => 'HomeController@admin']);

Route::get('/',[ 'as' => 'home_path','uses' => 'HomeController@index']);
Route::get('home',[ 'as' => 'home_path2','uses' => 'HomeController@index']);
Route::get('about-us',['as' => 'about_path', 'uses' => 'PagesController@about']);

Route::get('contact-us',[ 'as' => 'contact_path', 'uses' => 'PagesController@contact']);
Route::post('contact-us','MessagesController@send');
Route::get('courses-offered',[ 'as' => 'courses_path', 'uses' => 'CoursesController@index']);

Route::get('course/add',[ 'as' => 'courses_add_path', 'uses' => 'CoursesController@create']);
Route::post('course/add', 'CoursesController@store');

Route::get('offers/add',[ 'middleware' => 'auth','as' => 'offer_add_path', 'uses' => 'OffersController@create']);
Route::post('offers/add',[ 'middleware' => 'auth','as' => 'offer_store_path', 'uses' => 'OffersController@store']);

Route::get('offers',[ 'as' => 'offer_view_path', 'uses' => 'OffersController@index']);
//Route::get('offers/edit/{num}',[ 'as' => 'offer_edit_path', 'uses' => 'OffersController@edit']);
Route::get('offers/destroy/{num}',[ 'as' => 'offer_destroy_path', 'uses' => 'OffersController@destroy']);


Route::get('certificates/add',[ 'as' => 'certificate_add_path', 'uses' => 'CertificatesController@create']);
Route::get('certificates/edit',[ 'as' => 'certificate_edit_path', 'uses' => 'CertificatesController@edit']);
Route::get('certificates/edit/{num}', 'CertificatesController@edit');
Route::post('certificates/edit/{num}', 'CertificatesController@update');
Route::post('certificates/add', 'CertificatesController@store');
Route::get('certificates', ['as' => 'certificates_view_path', 'uses' => 'CertificatesController@index']);

Route::get('certificates/destroy/{num}',['as' => 'certificate_remove_path','uses' => 'CertificatesController@destroy']);

Route::get('track', ['as' => 'track_path', 'uses' => 'PagesController@track']);
Route::post('track', 'CertificatesController@search');

Route::get('course/certificate-in-computer-application', ['as' => 'cca_path', 'uses' => 'PagesController@cca']);
Route::get('course/diploma-in-computer-application-and-technology', ['as' => 'dcat_path', 'uses' => 'PagesController@dcat']);
Route::get('course/advanced-diploma-computer-application-programming', ['as' => 'adcap_path', 'uses' => 'PagesController@adcap']);
Route::get('course/professional-diploma-computer-software-technology', ['as' => 'pdcst_path', 'uses' => 'PagesController@pdcst']);
Route::get('course/diploma-computer-hardware-technology', ['as' => 'dcht_path', 'uses' => 'PagesController@dcht']);
Route::get('course/advanced-diploma-compute-hardware-networking-technology', ['as' => 'adchnt_path', 'uses' => 'PagesController@adchnt']);
Route::get('course/professional-diploma-computer-hardware-technology', ['as' => 'pdcht_path', 'uses' => 'PagesController@pdcht']);
Route::get('course/post-graduate-diploma-computer-application', ['as' => 'pgdca_path', 'uses' => 'PagesController@pgdca']);

Route::get('api-get-course-info', ['as' => 'api_get_course_info', 'uses' => 'PagesController@get_course_info']);

Route::get('admit/add', ['middleware' => 'auth', 'as' => 'admit_add_path', 'uses' => 'AdmitsController@create']);
Route::post('admit/add', ['middleware' => 'auth', 'uses' => 'AdmitsController@store']);
Route::get('admits', ['middleware' => 'auth', 'as' => 'admit_view_path', 'uses' => 'AdmitsController@index']);
Route::get('admit/edit', ['middleware' => 'auth', 'as' => 'admit_edit_path', 'uses' => 'AdmitsController@edit']);
Route::get('admit/edit/{num}', ['middleware' => 'auth', 'uses' => 'AdmitsController@edit']);
Route::post('admit/edit/{num}', ['middleware' => 'auth', 'uses' => 'AdmitsController@update']);
Route::get('admits/destroy/{num}', ['middleware' => 'auth', 'as' => 'admit_remove_path', 'uses' => 'AdmitsController@destroy']);

Route::get('exam-dates/add', ['middleware' => 'auth', 'as' => 'exam_add_path', 'uses' => 'ExamsController@create']);
Route::get('exams/edit', ['middleware' => 'auth', 'as' => 'exam_edit_path', 'uses' => 'ExamsController@edit']);
Route::get('exams/edit/{num}', ['middleware' => 'auth', 'uses' => 'ExamsController@edit']);
Route::post('exams/edit/{num}', 'ExamsController@update');
Route::get('exams', ['middleware' => 'auth', 'as' => 'exams_view_path', 'uses' => 'ExamsController@index']);
Route::get('exams/destroy/{num}', ['middleware' => 'auth', 'as' => 'exam_remove_path','uses' => 'ExamsController@destroy']);
Route::post('exam-dates/add', ['middleware' => 'auth', 'uses' => 'ExamsController@store']);

Route::get('results/add', ['middleware' => 'auth', 'as' => 'result_add_path', 'uses' => 'ResultsController@create']);
Route::post('results/add', ['middleware' => 'auth', 'uses' => 'ResultsController@store']);

Route::get('results', ['middleware' => 'auth', 'as' => 'result_view_path', 'uses' => 'ResultsController@index']);
Route::get('results/admin-view', ['middleware' => 'auth', 'as' => 'result_admin_view_path', 'uses' => 'ResultsController@admin_view']);
Route::get('results/search-all', ['as' => 'res_search', 'middleware' => 'auth', 'uses' => 'ResultsController@view']);
Route::post('results/admin-view', ['middleware' => 'auth', 'uses' => 'ResultsController@admin_view_result']);

Route::post('results/add', ['middleware' => 'auth', 'uses' => 'ResultsController@store']);
Route::get('results/edit', ['middleware' => 'auth' ,'as' => 'result_edit_path', 'uses' => 'ResultsController@edit']);
Route::get('results/edit/{num}', ['middleware' => 'auth' , 'uses' => 'ResultsController@edit']);
Route::post('results/edit/{num}', ['middleware' => 'auth' , 'uses' => 'ResultsController@update']);
Route::get('results/destroy/{num}', ['middleware' => 'auth', 'as' => 'result_remove_path', 'uses' => 'ResultsController@destroy']);

Route::get('results/search', [ 'as' => 'admission_result_path', 'uses' => 'ResultsController@search']);
Route::post('results/search', ['uses' => 'ResultsController@search_result']);

Route::get('res', [ 'uses' => 'ResultsController@admin_search', 'middleware' => 'auth']);
Route::post('res', ['uses' => 'ResultsController@search_result']);
Route::get('results-pdf', [  'uses' => 'ResultsController@api_get_all_result']);

Route::get('apply-online',['as' => 'apply.online', 'uses' => 'ApplicationsController@apply_online']);
Route::post('apply-online',['as' => 'applied.online', 'uses' => 'ApplicationsController@post_online']);

Route::get('applications', ['middleware' => 'auth','as' => 'applications.view_all', 'uses' => 'ApplicationsController@view_applications']);

Route::get('application-view/{num}', ['middleware' => 'auth','as' => 'application.view', 'uses' => 'ApplicationsController@viewApplication']);

Route::post('application-process', ['middleware' => 'auth','as' => 'application.process', 'uses' => 'ApplicationsController@processApplication']);

Route::get('application-reject/{num}', ['middleware' => 'auth','as' => 'application.reject', 'uses' => 'ApplicationsController@rejectApplication']);

Route::get('accepted-applications', ['middleware' => 'auth','as' => 'applications.accepted.all', 'uses' => 'ApplicationsController@view_accepted_applications']);
Route::get('application-view-print/{num}', ['middleware' => 'auth','as' => 'application.view.print', 'uses' => 'ApplicationsController@viewApplicationPrint']);


Route::get('search-applications/admin', ['middleware' => 'auth','as' => 'application.search.admin', 'uses' => 'ApplicationsController@search_applications_admin']);
Route::get('search-applications/result/admin', ['middleware' => 'auth','as' => 'application.search.admin.result', 'uses' => 'ApplicationsController@search_applications_admin_result']);

Route::get('application-submit', ['middleware' => 'auth','as' => 'application.submit', 'uses' => 'BranchApplicationsController@application_submit']);
Route::post('application-submit', ['middleware' => 'auth','as' => 'branch.submit', 'uses' => 'BranchApplicationsController@branch_submit']);

Route::get('branch-applications', ['middleware' => 'auth','as' => 'branch.applications', 'uses' => 'BranchApplicationsController@branch_applications']);

Route::get('remove-branch-applications', ['middleware' => 'auth','as' => 'disable.branch.applications', 'uses' => 'BranchApplicationsController@disable']);

Route::get('api-get-student-info', ['middleware' => 'auth','as' => 'branch.application.info', 'uses' => 'BranchApplicationsController@branch_application_info']);


Route::get('add-installment', [ 'uses' => 'InstallmentsController@create', 'as' => 'installment.add', 'middleware' => 'auth']);
Route::post('add-installment', [ 'uses' => 'InstallmentsController@store', 'as' => 'installment.submit', 'middleware' => 'auth']);

Route::get('edit-installment/{num}', [ 'uses' => 'InstallmentsController@edit', 'as' => 'installment.edit', 'middleware' => 'auth']);
Route::post('edit-installment/{num}', [ 'uses' => 'InstallmentsController@update', 'as' => 'installment.update', 'middleware' => 'auth']);


Route::get('installment-search', [ 'uses' => 'InstallmentsController@search', 'as' => 'installment.search', 'middleware' => 'auth']);
Route::get('installment-search-result', [ 'uses' => 'InstallmentsController@search_result', 'as' => 'installment.search_result', 'middleware' => 'auth']);
Route::get('view-installment/{num}', [ 'uses' => 'InstallmentsController@show', 'as' => 'installment.view', 'middleware' => 'auth']);

Route::get('installment/search/public', [ 'uses' => 'InstallmentsController@public_search', 'as' => 'installment.search.public']);
Route::post('installment/search/public', [ 'uses' => 'InstallmentsController@public_search_result', 'as' => 'installment.search_result.public']);