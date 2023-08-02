<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SearchController;
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



 Route::get('/',[PagesController::class, 'index']);
 Route::get('/index',[PagesController::class, 'indexx']);
Route::get('/news',[PagesController::class, 'news']);
Route::get('/about',[PagesController::class, 'about']);

  Auth::routes();
 Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function()
{
    Route::get('/dashboard', function () {
        return view("admin.home");
     });
});

 Route::get('/home',[AdminController::class, 'index']);
 Route::get('/post',[AdminController::class, 'addpost']);
Route::get('/add_org',[AdminController::class, 'addview']);
Route::get('/orgedit',[AdminController::class, 'orgedit']);
Route::get('/orgshow',[AdminController::class, 'orgshow']);
Route::get('/edit',[AdminController::class, 'edit']);
Route::get('/show',[AdminController::class, 'show']);
// Route::get('/add_org',[PostController::class, 'addview']);
//  Route::get('/post',[PostController::class, 'addpost']);
//  Route::get('/home',[PostController::class, 'index']);
// Route::get('/post',[AddController::class, 'addpost']);
//  Route::get('/home',[AddController::class, 'index']);
//  Route::resource('admin','AddController');
// Route::get('/add_org','AddController@store');
Route::resource('admin','AddController');
 Route::resource('post', 'PostController');
// --------------------------------------------------------
// Route::get('/', function () {
//   $latitude       =       "28.418715";
//         $longitude      =       "77.0478997";

//         $shops          =       DB::table("shops");

//         $shops          =       $shops->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))
//                                 * cos(radians(latitude)) * cos(radians(longitude) - radians(" . $longitude . "))
//                                 + sin(radians(" .$latitude. ")) * sin(radians(latitude))) AS distance"));
//         $shops          =       $shops->having('distance', '<', 20);
//         $shops          =       $shops->orderBy('distance', 'asc');

//         $shops          =       $shops->get();

//         return view('shop-listing', compact("shops"));
// });

 Route::get('shop', 'ShopController@index');

Route::post("current-lat-long", "ShopController@getLatLong");

Route::get('shop-create', 'ShopController@create');

Route::post('store-shop', 'ShopController@store');



Route::get('near-by-places', [LocationController::class, 'lindex']);
Route::get('/search', [SearchController::class,'search'])->name('search');
// Route::get('/news', [SearchController::class,'search'])->name('search');
