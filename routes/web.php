<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();
Route::get('/', [App\Http\Controllers\webController::class, 'website'])->name('/');
Route::get('/collection', [App\Http\Controllers\CollectionController::class, 'collection'])->name('collection');
Route::get('/membership', [App\Http\Controllers\MembershipController::class, 'membership'])->name('membership');
Route::get('/event', [App\Http\Controllers\EventController::class, 'event'])->name('event');
Route::get('/organization', [App\Http\Controllers\OrganizationController::class, 'organization'])->name('organization');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::post('/create-membership', [App\Http\Controllers\MembershipController::class, 'storemembership'])->name('create-membership');

Route::middleware(['auth',])->group (function(){

 Route::get('/website', [App\Http\Controllers\webController::class, 'website'])->name('/website');
 Route::get('/service', [App\Http\Controllers\adminController::class, 'service'])->name('service');
 Route::get('/company', [App\Http\Controllers\adminController::class, 'company'])->name('company');
 Route::get('/price', [App\Http\Controllers\adminController::class, 'price'])->name('price');
 Route::get('/admin-home', [App\Http\Controllers\adminController::class, 'home'])->name('admin-home');
 Route::get('/company-edit/{id}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('company-edit');
 Route::put('/update-company/{id}', [App\Http\Controllers\CompanyController::class, 'update'])->name('update-company');
 Route::put('/update-home/{id}', [App\Http\Controllers\HomeSecController::class, 'update'])->name('update-home');
 Route::get('/edit-home/{id}', [App\Http\Controllers\HomeSecController::class, 'edit'])->name('edit-home');
 Route::get('/about', [App\Http\Controllers\adminController::class, 'about'])->name('about');
 Route::put('/update-about/{id}', [App\Http\Controllers\aboutUsController::class, 'update'])->name('update-about');
 Route::get('/edit-about/{id}', [App\Http\Controllers\aboutUsController::class, 'edit'])->name('edit-about');
 Route::get('/edit-services/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('edit-services');
 Route::get('/delete-service/{id}', [App\Http\Controllers\ServiceController::class, 'delete'])->name('delete-service');
 Route::put('/update-services/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('update-services');
 Route::post('/store-service', [App\Http\Controllers\ServiceController::class, 'store'])->name('store-service');
 Route::post('/store-price', [App\Http\Controllers\PricingController::class, 'storeprice'])->name('store-price');
 Route::get('/delete/{id}', [App\Http\Controllers\PricingController::class, 'destroy'])->name('delete-price');
 Route::put('/update/{id}', [App\Http\Controllers\PricingController::class, 'update'])->name('update-price');
 Route::get('/edit-price/{id}', [App\Http\Controllers\PricingController::class, 'edit'])->name('edit-price');



 Route::get('/admin-membership', [App\Http\Controllers\MembershipController::class, 'adminMembership'])->name('admin-membership');


});





