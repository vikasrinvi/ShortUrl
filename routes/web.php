<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShortUrlController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
	return redirect()->route('login');
    $urls = \AshAllenDesign\ShortURL\Models\ShortURL::latest()->get();
    return view('welcome', compact('urls'));
});

Route::post('/short-url', [ShortUrlController::class, 'create'])->name('url.shorten');
Route::post('/short-url/{id}', [ShortUrlController::class, 'update'])->name('update');


