<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WorkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('contact-us', [MailController::class,'sendMail']);
Route::get('works', [WorkController::class,'index']);
Route::get('work-detail/{id}', [WorkController::class,'workDetail']);

Route::get('blogs', [BlogController::class,'index']);
Route::get('blog-detail/{id}', [BlogController::class,'blogDetail']);
Route::get('prev-blog-detail/{id}', [BlogController::class,'prevBlogDetail']);
Route::get('latest-blog-detail/{id}', [BlogController::class,'latestBlogDetail']);

Route::get('news', [NewsController::class,'news']);
Route::get('news-detail/{id}', [NewsController::class,'newsDetail']);
Route::get('prev-news-detail/{id}', [NewsController::class,'prevNewsDetail']);
Route::get('latest-news-detail/{id}', [NewsController::class,'latestNewsDetail']);
