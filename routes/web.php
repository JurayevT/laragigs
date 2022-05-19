<?php

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

Route::get('/', function () {
    return view('welcome');
});

// All listings
Route::get('listings', function() {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
})->where('id', '[0-9]+');