<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');

    return '<h1>cleared</h1>';
});
// Route::get('/', function () {
//     return view('welcome');
// });
// frontend
Route::get('/', 'App\Http\Controllers\FrontendController@index');
Route::get('frontend.index', 'App\Http\Controllers\FrontendController@index');
Route::get('frontend.findjobs', 'App\Http\Controllers\FrontendController@findjobs');
Route::post('filter_jobs', 'App\Http\Controllers\FrontendController@filterjobs');
Route::post('filter_indexjobs', 'App\Http\Controllers\FrontendController@indexfilter');


Route::get('frontend/jobdetails/{id}', 'App\Http\Controllers\FrontendController@jobdetails');
Route::get('frontend.register', 'App\Http\Controllers\FrontendController@register');
Route::get('frontend.login', 'App\Http\Controllers\FrontendController@login');
Route::get('frontend.personal-details', 'App\Http\Controllers\FrontendController@details');
Route::get('frontend.postjob-first', 'App\Http\Controllers\FrontendController@postjob');
Route::get('frontend.postjob', 'App\Http\Controllers\FrontendController@postajob');
// jobs
Route::get('frontend.jobs', 'App\Http\Controllers\FrontendController@jobs');
// apply job search
Route::post('apply_job', 'App\Http\Controllers\FrontendController@job_search');


Route::get('frontend.candidates', 'App\Http\Controllers\FrontendController@candidates');
Route::post('job_tittle', 'App\Http\Controllers\FrontendController@search_tittle');


Route::get('frontend.company', 'App\Http\Controllers\FrontendController@company');
Route::get('frontend/apply-now', 'App\Http\Controllers\FrontendController@apply');
Route::get('get_stream','App\Http\Controllers\FrontendController@get_streampage');
Route::get('get_district','App\Http\Controllers\FrontendController@get_districtpage');


// paused and activate
Route::get('topaused/{id}', 'App\Http\Controllers\FrontendController@paused');
Route::get('toactivate/{id}', 'App\Http\Controllers\FrontendController@active');
Route::get('postdelete/{id}', 'App\Http\Controllers\FrontendController@delete');
// personal details submission
Route::get('postdelete/{id}', 'App\Http\Controllers\FrontendController@delete');

Route::post('personalsave', 'App\Http\Controllers\FrontendController@submitsave');
Route::get('frontend/apply-now/{id}', 'App\Http\Controllers\FrontendController@applyforjob');
// apply-now
Route::post('applynow_save', 'App\Http\Controllers\FrontendController@applynow_save');
Route::post('updateapply', 'App\Http\Controllers\FrontendController@updateapply');
// cv
Route::get('/frontend/cv/{id}', 'App\Http\Controllers\FrontendController@cv_view');


// company form(firm details)
Route::post('companysave', 'App\Http\Controllers\FirmController@submitsave');

// registration
Route::post('registrationsave', 'App\Http\Controllers\RegistrationController@savepage');


 Route::get('admin-dashboard', 'App\Http\Controllers\DashboardController@dashboard');
//state
Route::get('state/index', 'App\Http\Controllers\StateController@statepage');
Route::get('state/create', 'App\Http\Controllers\StateController@createpage');
Route::post('savestate', 'App\Http\Controllers\StateController@savepage');
Route::get('state/edit/{id}','App\Http\Controllers\StateController@editpage');
Route::post('updatestate', 'App\Http\Controllers\StateController@updatepage');
Route::get('delete/{id}','App\Http\Controllers\StateController@deletepage');
//district
Route::get('district/index', 'App\Http\Controllers\DistrictController@indexpage');
Route::get('district/create', 'App\Http\Controllers\DistrictController@createpage');
Route::post('savedistrict', 'App\Http\Controllers\DistrictController@savepage');
Route::get('district/edit/{id}','App\Http\Controllers\DistrictController@editpage');
Route::post('updatedistrict', 'App\Http\Controllers\DistrictController@updatepage');
Route::get('delete/{id}','App\Http\Controllers\DistrictController@deletepage');
//degree
Route::get('degree/index', 'App\Http\Controllers\GraduationController@indexpage');
Route::get('degree/create', 'App\Http\Controllers\GraduationController@createpage');
Route::post('savedegree', 'App\Http\Controllers\GraduationController@savepage');
Route::get('degree/edit/{id}','App\Http\Controllers\GraduationController@editpage');
Route::post('updatedegree', 'App\Http\Controllers\GraduationController@updatepage');
Route::get('delete/{id}','App\Http\Controllers\GraduationController@deletepage');
//stream
Route::get('stream/index', 'App\Http\Controllers\StreamController@indexpage');
Route::get('stream/create', 'App\Http\Controllers\StreamController@createpage');
Route::post('savedata', 'App\Http\Controllers\StreamController@savepage');
Route::get('stream/edit/{id}','App\Http\Controllers\StreamController@editpage');
Route::post('updatesave', 'App\Http\Controllers\StreamController@updatepage');
Route::get('delete/{id}','App\Http\Controllers\StreamController@deletepage');
//Business stream
Route::get('business_stream/index', 'App\Http\Controllers\BusinessController@indexpage');
Route::get('business_stream/create', 'App\Http\Controllers\BusinessController@createpage');
Route::post('savebusiness', 'App\Http\Controllers\BusinessController@savepage');
Route::get('business_stream/edit/{id}','App\Http\Controllers\BusinessController@editpage');
Route::post('updatesave', 'App\Http\Controllers\BusinessController@updatepage');
Route::get('delete/{id}','App\Http\Controllers\BusinessController@deletepage');
//job category
Route::get('category/index', 'App\Http\Controllers\CategoryController@indexpage');
Route::get('category/create', 'App\Http\Controllers\CategoryController@createpage');
Route::post('savecategory', 'App\Http\Controllers\CategoryController@savepage');
Route::get('category/edit/{id}','App\Http\Controllers\CategoryController@editpage');
Route::post('updatecategory', 'App\Http\Controllers\CategoryController@updatepage');
Route::get('delete/{id}','App\Http\Controllers\CategoryController@deletepage');
//job type
Route::get('jobtype/index', 'App\Http\Controllers\JobtypeController@indexpage');
Route::get('jobtype/create', 'App\Http\Controllers\JobtypeController@createpage');
Route::post('savetype', 'App\Http\Controllers\JobtypeController@savepage');
Route::get('jobtype/edit/{id}','App\Http\Controllers\JobtypeController@editpage');
Route::post('updatetype', 'App\Http\Controllers\JobtypeController@updatepage');
Route::get('delete/{id}','App\Http\Controllers\JobtypeController@deletepage');
// job posting(post a job)
Route::post('savepostjob', 'App\Http\Controllers\PostingController@savepage');


require __DIR__.'/auth.php';
