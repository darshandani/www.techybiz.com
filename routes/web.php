<?php

use App\Http\Controllers\admin\AccountsettingController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\SecurityController;
use App\Http\Controllers\admin\ServicemessageController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\admin\UsecontactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\frontend\SigninController;
use App\Http\Controllers\frontend\SignupController;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Route;



#FRONTEND ROUTES
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

Route::get('/signin', [SigninController::class, 'signin']);
Route::post('/signin', [SigninController::class, 'authenticate'])->name('signin.auth');

Route::get('/emailtemplate', function () {
    return view('frontend.emailtemplate');
});


Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'aboute']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/team-details', [HomeController::class, 'teamdetalis']);
Route::get('/price', [HomeController::class, 'price']);
Route::get('/error', [HomeController::class, 'error']);
Route::get('/coming-soon', [HomeController::class, 'comingsoon']);
Route::get('/project-grid', [HomeController::class, 'projectgrid']);
Route::get('/blog-grid', [BlogController::class, 'frontendblog']);
Route::get('/services', [HomeController::class, 'services']);

Route::get('/faq', [FaqController::class, 'frontendfaq']);



#User Contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);

#User Service
Route::get('/services-details', [ServiceController::class, 'index']);
Route::post('/services-details', [ServiceController::class, 'store']);




//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--//--



#ADMIN AUTH
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'doLogin'])->name('backend.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/forgetpass', [LoginController::class, 'forgotpassword'])->name('forgetpass');
Route::post('/sendemail', [LoginController::class, 'sendforgotpasswordlink'])->name('sendemail');
Route::get('/forgot/verify/{token}', [LoginController::class, 'verifyforgotemail'])->name('forgot.verify');
Route::post('/setpassword', [LoginController::class, 'setpassword'])->name('setpassword');



#ADMIN ROUTES
Route::prefix('sds')->group(function () {
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');
        Route::get('/usercontacts', [UsecontactController::class, 'index'])->name('backend.usercontacts');
        Route::get('/usercontacts/getdata', [UsecontactController::class, 'getdata'])->name('backend.usercontacts.getdata');
        Route::get('/usercontacts/{id}', [UsecontactController::class, 'destroy'])->name('backend.usercontacts.destroy');
        Route::get('/servicemessage', [ServicemessageController::class, 'index'])->name('servicemessage');
        Route::get('/servicemessage/getdata', [ServicemessageController::class, 'getdata'])->name('servicemessage.getdata');
        Route::get('/user_export_pdf', [ServicemessageController::class, 'user_export_pdf'])->name('user_export_pdf');
        Route::get('/user_export_csv', [ServicemessageController::class, 'user_export_csv'])->name('user_export_csv');



        #Project Managment
        Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
        Route::post('/project/store', [ProjectController::class, 'store'])->name('userproject.store');
        Route::get('/project/getdata', [ProjectController::class, 'getdata'])->name('userproject.getdata');
        Route::post('/update-ProjectStatus', [ProjectController::class, 'projectStatusUpdate'])->name('update.ProjectStatus');
        Route::post('/update-PaymentStatus', [ProjectController::class, 'PaymentStatusUpdate'])->name('update.PaymentStatus');
        Route::post('/update-DiscountStatus', [ProjectController::class, 'DiscountStatusUpdate'])->name('update.DiscountStatus');
        Route::post('/project-ShowDetails', [ProjectController::class, 'ShowProjectDetails'])->name('project.ShowDetails');
        Route::get('project/csv', [ProjectController::class, 'csv'])->name('project.csv');




        #ADMIN ACCOUNT SETTINGS
        Route::get('/account', [AccountsettingController::class, 'index'])->name('account');
        Route::post('/account', [AccountsettingController::class, 'store'])->name('account.store');
        Route::get('/account/getdata', [AccountsettingController::class, 'getdata'])->name('account.getdata');
        Route::get('/security', [SecurityController::class, 'index'])->name('security.index');
        Route::post('/security/changepassword', [SecurityController::class, 'changepassword'])->name('changepassword');
        Route::get('/profile', [AccountsettingController::class, 'profileview'])->name('profile.view');



        #FAQ Managment
        Route::get('/addfaq', [FaqController::class, 'index'])->name('addfaq');
        Route::post('/addfaq', [FaqController::class, 'store'])->name('faq.store');
        Route::get('/faqListing', [FaqController::class, 'faqlisting'])->name('faqlisting');
        Route::get('/faqListing/getdata', [FaqController::class, 'getdata'])->name('faqListing.getdata');
        Route::get('/faqListing/{id}', [FaqController::class, 'destroy'])->name('faq.delete');
        Route::get('/faqListing/show/{id}', [FaqController::class, 'show'])->name('faq.show');
        Route::get('/editfaq/{id}', [FaqController::class, 'edit'])->name('faq.edit');
        Route::put('/faqListing/{id}', [FaqController::class, 'update'])->name('faq.update');
        Route::get('/faqListing/delete/{id}', [FaqController::class, 'destroy'])->name('faq.delete');
        Route::get('/faq_export_pdf', [FaqController::class, 'faq_export_pdf'])->name('faq_export_pdf');
        Route::get('/csv_faqs', [FaqController::class, 'csv_faqs'])->name('csv_faqs');


        #Blog Managment
        Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
        Route::post('/blog/store', [BlogController::class, 'blogstore'])->name('blog.store');
        Route::get('/bloglisting', [BlogController::class, 'bloglist'])->name('blog.bloglist');
        Route::get('/bloglisting/getdata', [BlogController::class, 'getdata'])->name('bloglisting.getdata');
        Route::get('/bloglisting/show/{id}', [BlogController::class, 'show'])->name('blog.show');
        Route::get('/editblog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/bloglisting/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/bloglisting/delete/{id}', [BlogController::class, 'destroy'])->name('bloglisting.delete');
    });
});



// DEFINED ADMIN IMAGES PATH //
defined('IMAGE_PATH') or define('IMAGE_PATH', base_path() . '/public/images/');

// dd(public_path());
// defined('BLOG_PATH') or define('BLOG_PATH', base_path() . '/images/blog');
// defined('BLOG_ROOT') or define('BLOG_ROOT', URL('/images/blog') . '/');
defined('BLOG_PATH') or define('BLOG_PATH', public_path() . '/images/blog');
defined('BLOG_ROOT') or define('BLOG_ROOT', asset('images/blog') . '/');
