<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NeweController;
use App\Http\Controllers\PostController;

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



//middleware(Auth,verifiedd)
Route::get('/home',[HomeController::class,'redirect'])->name('homee')
;
//route admin
Route::get('/showappointment', [AdminController::class, 'showappointment'])->name('show_appointment');
Route::get('/approved/{id}', [AdminController::class, 'approved'])->name('approved');
Route::get('/canceled/{id}', [AdminController::class, 'canceled'])->name('canceled');
Route::get('/emailview/{id}', [AdminController::class, 'emailview'])->name('emailview');
Route::get('/emailsend/{id}', [AdminController::class, 'sendemail'])->name('emailview');
Route::resource('doctor', DoctorController::class);
Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);
//route front (user)
Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/doctors',[FrontController::class,'doctors'])->name('doctors');
Route::get('/about-us',[FrontController::class,'about'])->name('about');
Route::get('/news',[FrontController::class,'news'])->name('news');
Route::get('/news-details/{slug}',[FrontController::class,'details'])->name('news-details');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::post('/contact',[FrontController::class,'contactsub'])->name('contactsub');
Route::get('/myappointment', [HomeController::class, 'myappointment'])->name('myappointment');
Route::post('/appointment', [HomeController::class, 'appointment'])->name('subappointment');
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint'])->name('cancel_appoint');

















































Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
