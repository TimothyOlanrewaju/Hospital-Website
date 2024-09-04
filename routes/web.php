<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// WELCOME_ROUTE
Route::get('/add_welcome',[AdminController::class,'addview']);

Route::post('/upload_welcome',[AdminController::class,'upload']);
Route::get('/show_welcome',[AdminController::class,'show_welcome']);
Route::get('/delete_welcome/{id}',[AdminController::class,'delete_welcome']);
Route::get('/update_welcome/{id}',[AdminController::class,'update_welcome']);
Route::post('/edit_welcome/{id}',[AdminController::class,'edit_welcome']);
Route::get('/welcome_details/{id}',[HomeController::class,'welcome_details']);

// MAINSLIDER_ROUTE

Route::get('/add_mainslider',[AdminController::class,'addmainslider']);
Route::post('/upload_mainslider',[AdminController::class,'uploadmainslider']);
Route::get('/show_mainslider',[AdminController::class,'show_slider']);
Route::get('/delete_mainslider/{id}',[AdminController::class,'delete_mainslider']);

Route::get('/mainslider_update/{id}',[AdminController::class,'mainslider_update']);

Route::post('/update_mainslider_page/{id}',[AdminController::class,'update_mainslider_page']);

// ENDMAIN_SLIDER

Route::get('/add_couresol',[AdminController::class,'addcouresol']);

Route::post('/upload_courosel',[AdminController::class,'uploadcourosel']);


Route::get('/add_featured_services',[AdminController::class,'featuredservices']);
Route::post('/upload_featured_services',[AdminController::class,'uploadfeaturedservices']);

Route::get('/why_us',[AdminController::class,'whyus']);
Route::post('/upload_whyus',[AdminController::class,'uploadwhyus']);

Route::get('/blog_page',[AdminController::class,'blog']);
Route::post('/upload_blog',[AdminController::class,'upload_blog']);

Route::get('/show_blog',[AdminController::class,'show_blog']);


Route::get('/delete_blog/{id}',[AdminController::class,'delete_blog']);

Route::get('/update_post/{id}',[AdminController::class,'update_blog']);

Route::post('/update_post_page/{id}',[AdminController::class,'update_blog_page']);

 // Route::get('/blog', [HomeController::class, 'showBlog'])->name('blog.index');
Route::get('/post_details/{id}',[HomeController::class,'post_details']);
Route::get('/latest_news',[HomeController::class,'latest_news']);


//appointment

Route::post('/book_appointment',[HomeController::class,'book_appointment']);

Route::post('/book_appointment',[HomeController::class,'book_appointment']);

Route::get('/my_appointment',[HomeController::class,'my_appointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/show_appointments',[AdminController::class,'show_appointments']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/cancel/{id}',[AdminController::class,'cancel']);


Route::get('/add_services_list',[AdminController::class,'add_service_list']);

Route::post('/service_list',[AdminController::class,'service_list']);


Route::get('/service_page',[AdminController::class,'service_page']);

Route::post('/serve_list',[AdminController::class,'serve_list']);

Route::post('/category_add_service',[AdminController::class,'category_add_service']);

Route::get('/show_services',[AdminController::class,'show_services']);

Route::get('/delete_service/{id}',[AdminController::class,'delete_service']);
Route::get('/edit_services/{id}',[AdminController::class,'edit_services']);


Route::get('/service_page',[AdminController::class,'service_page']);



Route::get('/service',[AdminController::class,'ServiceHome']);

Route::get('/service_view/{id}',[HomeController::class,'service_view']);

Route::get('/new_category',[AdminController::class,'new_category']);

Route::get('/who_we_are',[AdminController::class,'who_we_are']);

Route::get('/delete_who_we_are/{id}',[AdminController::class,'delete_who_we_are']);

Route::get('/update_who/{id}',[AdminController::class,'update_who']);
Route::post('/update_who_page/{id}',[AdminController::class,'update_who_page']);


// FEATURED SERVICES

Route::get('/featured_services',[AdminController::class,'featured_services']);
Route::get('/delete_featured/{id}',[AdminController::class,'delete_featured']);
Route::get('/update_featured/{id}',[AdminController::class,'update_featured']);
Route::post('/featured_page_update/{id}',[AdminController::class,'featured_page_update']);


//contactus

Route::get('/contact',[HomeController::class,'contact']);

Route::post('/contact_us',[HomeController::class,'contact_us']);

Route::get('/contact_admin',[AdminController::class,'contact_admin']);


//About_Us submit form who we are section

Route::get('/about_us',[AdminController::class,'about_us']);

Route::post('/add_about_us',[AdminController::class,'add_about_us']);

//show who we are

Route::get('/detail_who_we_are',[AdminController::class,'detail_who_we_are']);
Route::get('/delete_who/{id}',[AdminController::class,'delete_who']);
Route::get('/update_who_we/{id}',[AdminController::class,'update_who_we']);
Route::post('/edit_who_we_are_page/{id}',[AdminController::class,'editWhoWeArePage']);


//About Us---> Who We Are
Route::get('/WhoWeAre',[HomeController::class,'WhoWeAre']);


//TMC_MEMBERS
Route::get('/add_tmc_members',[AdminController::class,'AddTmcMembers']);
Route::post('/upload_tmc',[AdminController::class,'UploadTmc']);
Route::get('/show_tmc',[AdminController::class,'show_tmc']);
Route::get('/delete_tmc_member/{id}',[AdminController::class,'delete_tmc']);
Route::any('/edit_tmc/{id}',[AdminController::class,'edit_tmc']);
Route::post('/update_tmc/{id}',[AdminController::class,'update_tmc']);


Route::get('/tmc_members',[HomeController::class,'tmc_members']);


//Our History
Route::get('/history',[AdminController::class,'our_history']);
Route::post('/upload_history',[AdminController::class,'upload_history']);

Route::get('/show_history',[AdminController::class,'show_history']);

Route::get('/delete_history/{id}',[AdminController::class,'delete_history']);
Route::get('/update_history/{id}',[AdminController::class,'update_history']);

Route::post('/edit_history/{id}',[AdminController::class,'edit_history']);

Route::get('/our_history',[HomeController::class,'our_history']);


//PROGRAMME
Route::get('/program',[AdminController::class,'program']);
Route::post('/program_form',[AdminController::class,'program_form']);

Route::get('/show_prog',[AdminController::class,'show_prog']);
Route::get('/delete_prog',[AdminController::class,'delete_prog']);
Route::get('/update_prog/{id}',[AdminController::class,'update_prog']);
Route::post('/edit_prog/{id}',[AdminController::class,'edit_prog']);

Route::get('/programs',[HomeController::class,'programs']);
Route::get('/program_details/{id}',[HomeController::class,'program_details']);

//index page count
Route::get('/',[HomeController::class,'index'])->middleware('track.views');

//email list
Route::get('/email_list',[AdminController::class,'email_list']);
Route::get('/email_approved/{id}',[AdminController::class,'email_approved']);
Route::get('/email_cancel/{id}',[AdminController::class,'email_cancel']);
Route::get('/email_delete/{id}',[AdminController::class,'email_delete']);

Route::get('/career',[HomeController::class,'career']);
Route::get('/sop',[HomeController::class,'sop']);
Route::get('/our_services',[HomeController::class,'our_services']);



