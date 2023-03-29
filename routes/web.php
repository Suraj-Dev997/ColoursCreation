<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\admindash;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VideoController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/gallery/video', [VideoController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/admin', [admindash::class, 'index']);
Route::post('/admin/submit', [admindash::class, 'submit_login']);
Route::middleware(['guard'])->group(function () {

    Route::get('/admindash', [ContactController::class, 'view']);
    Route::get('contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
    Route::get('video/delete/{id}', [admindash::class, 'delete'])->name('video.delete');
    Route::resource('/products', ProductController::class);
    Route::get('/gallerymange', [admindash::class, 'galleryview']);
    Route::get('/videomange', [admindash::class, 'videoview']);
    Route::get('/videomange/add', [admindash::class, 'page']);
    Route::post('/createvideo', [admindash::class, 'store']);
});
Route::get('/logout', function () {
    if (session()->has('username')) {
        session()->pull('username', null);
    }
    return redirect('admin');
});
Route::get('/no-access', function () {
    echo "You're not access to the page";
    die;
});
