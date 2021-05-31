<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Mail\DiscountOffer;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

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
Route::get('/hello/{name}', function ($name) {
    return view('hello', compact('name'));
});
Route::view('/about', 'about');

Route::view('posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);


Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::resource('posts', PostController::class);
Route::post('/posts/{posts}/comments', [CommentsController::class, 'store']);
Route::post('mail/', function () {
    $email = request()->validate([
        'email' => 'required|email'
    ]);
    Mail::to($email)->send(new DiscountOffer());
    return back();
});
