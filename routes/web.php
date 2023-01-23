<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\MainSectionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Models\Admin\SettingController;
use App\Models\MainSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[FrontendController::class,'index']);
Route::get('/',[FrontendController::class,'index'])->name('frontend.index');


Auth::routes();
Route::group(['prefix'=>'admin','middleware' => ['auth:web']], function () {

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::resource('main_section',MainSectionController::class);
Route::resource('about_us',AboutController::class);
Route::resource('services',ServiceController::class);
Route::resource('blogs',BlogController::class);
Route::resource('settings',AdminSettingController::class);
Route::resource('contacts',ContactController::class);

//task send milion mail
Route::get('emails', [MailController::class, 'index'])->name('admin.emails');
Route::delete('emails_destroy/{id}', [MailController::class, 'destroy'])->name('admin.emails_destory');
Route::post('send-bulk-mail', [MailController::class, 'send_mail'])->name('admin.send-bulk-mail');

});
Route::resource('frontend_contacts',ContactController::class);


