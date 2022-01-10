<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
use App\Models\Auction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
// use Newsletter;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('dashboard', [HomeController::class, 'dashboard']);
Route::get('admin/auctions/listing', [AuctionController::class, 'index']);
Route::get('admin/auctions/add', [AuctionController::class, 'create']);

Route::get('admin/auctions/edit/{id}', [AuctionController::class, 'edit']);
Route::post('admin/auctions/edit/{id}', [AuctionController::class, 'update']);
Route::get('admin/auctions/delete/{id}', [AuctionController::class, 'destroy']);


Route::get('admin/vehicles/listing', [VehicleController::class, 'index']);
Route::get('admin/vehicles/add', [HomeController::class, 'car_auction']);
Route::get('admin/vehicles/edit/{id}', [VehicleController::class, 'edit']);
Route::post('admin/vehicles/edit/{id}', [VehicleController::class, 'update']);
Route::get('admin/vehicles/delete/{id}', [VehicleController::class, 'destroy']);


// Route::view('admin/vehicles/listing', 'admin.vehicles.listing');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('addToAuction', [HomeController::class, 'store']);
Route::view('auction', 'admin.add_auction');
Route::post('add_auction', [HomeController::class, 'storeAuction']);

Route::post('dropzone_store/{id}', [HomeController::class, 'addGallery'])->name('dropzone.store');

Route::get('/deleteGalleryFile/{file}', [HomeController::class, 'deleteGalleryFile']);

Route::get('/deleteImageFile/{file}', [HomeController::class, 'deleteImageFile']);

Route::post('single_store/{id}', [HomeController::class, 'front_image']);
// Route::get('car_auctions', [HomeController::class, 'car_auction']);
Route::get('getAuction', [HomeController::class, 'getAuction']);

Route::get('download/{file}', [HomeController::class, 'downloadPdf']);


Route::get('contactUs', function () {
    return view('contactUs');
});
Route::post('contactUs', [ContactController::class, 'store']);
// Route::get('/contactUS', 'contactUs');

Route::view('sendmail', 'emails.sendemail');
Route::post('sendmail', [ContactController::class, 'sendmail']);

Route::get('newsletter', [HomeController::class, 'checkMailchimp']);
