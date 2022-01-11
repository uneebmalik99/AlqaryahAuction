<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
use App\Models\Auction;
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

Route::get('/', [HomeController::class, 'welcome']);

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

//new routes above
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('addToAuction', [HomeController::class, 'store']);
Route::view('auction', 'admin.add_auction');
Route::post('add_auction', [HomeController::class, 'storeAuction']);

Route::post('dropzone_store/{id}', [HomeController::class, 'addGallery'])->name('dropzone.store');
Route::post('single_store/{id}', [HomeController::class, 'front_image']);
Route::get('addlisting', [HomeController::class, 'car_auction']);
Route::get('getAuction', [HomeController::class, 'getAuction']);
//Route::get('all_listings', [HomeController::class, 'search_listing']);
Route::get('download/{file}', [HomeController::class, 'downloadPdf']); 

//hamad test
Route::get('/auction_loc', function () {
    return view('auction_location'); // view name
});


//qazi
Route::get('all_listings', [HomeController::class, 'all_listings']);
Route::get('all_listings/dr', [HomeController::class, 'all_listings']);
Route::get('listing/{id}', [HomeController::class, 'listing']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('about', [HomeController::class, 'about']);
Route::get('faq', [HomeController::class, 'faq']);
Route::get('login-register', [HomeController::class, 'login_register']);
