<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// All listings
Route::get('/', [ListingController::class, 'index']);

// Show crate form
Route::get('listings/create', [ListingController::class, 'create']);

// Single Listing
Route::get('listings/{listing}', [ListingController::class, 'show'])->where('id', '[0-9]+');