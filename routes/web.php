<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment_Poly;
use App\Models\Video;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CaptchaServiceController;
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
Route::get('/logouts',[HomeController::class,'logoutUser'])->name('logouts');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts',[PostController::class,'index']);
Route::get('/posts-show/{id}',[PostController::class,'show'])->name('posts.show');
Route::post('/comments-store',[CommentController::class,'store'])->name('comments.store');

Route::get('/test',[PostController::class,'test']);

Route::get('/data', function () {
   
$post = Post::find(2);	

$comment = new Comment_Poly;
$comment->body = "hello";

 
$post->comment()->save($comment);


// $video = Video::find(1);	
 
// $comment = new Comment_Poly;
// $comment->body = "Hi ";
 
// $video->comment()->save($comment);

});

Route::get('/get', function () {

        $video = Post::find(1);	
 
        dd($video->comment);
});

Route::get('/p',[TestController::class,'add']);

Route::get('/qrcode', [QrCodeController::class, 'index']);
Route::get('/generate-barcode', [QrCodeController::class,'barCode'])->name('generate.barcode');

//barcode list
Route::get('/barcode', [QrCodeController::class, 'newBarCode']);
// download pdf
Route::get('/pdf', [QrCodeController::class, 'generatePDF'])->name('pdf');


// google login route
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/auth/google', [GoogleController::class,'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleController::class,'handleGoogleCallback']);


// localization
Route::get('lang/home', [LangController::class, 'index'])->name('lang');
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');


//captcha - not work    
Route::get('site-register', [RegisterController::class, 'siteRegister']);
Route::post('/site-register',[RegisterController::class,'siteRegisterPost']);

//captcha simple
Route::get('/contact-form', [CaptchaServiceController::class, 'index']);
Route::post('/captcha-validation', [CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);