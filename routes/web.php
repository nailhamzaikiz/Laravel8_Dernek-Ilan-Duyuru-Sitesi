<?php

use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});
Route::get('/',[HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/faq',[\App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/contact',[\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/references',[\App\Http\Controllers\HomeController::class, 'references'])->name('references');

Route::post('/sendmessage',[\App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');

Route::get('/contents',[\App\Http\Controllers\HomeController::class, 'contents'])->name('contents');
Route::get('/contents/{id}',[\App\Http\Controllers\HomeController::class, 'contents'])->name('contents');
Route::get('/content/{id}',[\App\Http\Controllers\HomeController::class, 'content'])->name('content');

Route::get('/haberler',[\App\Http\Controllers\HomeController::class, 'haberler'])->name('haberler');
Route::get('/haber/{id}',[\App\Http\Controllers\HomeController::class, 'haber'])->name('haber');

Route::get('/duyurular',[\App\Http\Controllers\HomeController::class, 'duyurular'])->name('duyurular');
Route::get('/duyuru/{id}',[\App\Http\Controllers\HomeController::class, 'duyuru'])->name('duyuru');

#livewire
Route::post('/getcontent',[\App\Http\Controllers\HomeController::class, 'getcontent'])->name('getcontent');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);//istersek burada bir koşul verebiliriz sadece saysal değerleri alır
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name');//yukarıdakinin aynısı

//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    # Menü
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    Route::get('menu',[\App\Http\Controllers\Admin\MenuController::class, 'index'])->name('admin_menu');
    Route::get('menu/add',[\App\Http\Controllers\Admin\MenuController::class, 'add'])->name('admin_menu_add');
    Route::post('menu/create',[\App\Http\Controllers\Admin\MenuController::class, 'create'])->name('admin_menu_create');
    Route::get('menu/edit/{id}',[\App\Http\Controllers\Admin\MenuController::class, 'edit'])->name('admin_menu_edit');
    Route::post('menu/update/{id}',[\App\Http\Controllers\Admin\MenuController::class, 'update'])->name('admin_menu_update');
    Route::get('menu/delete/{id}',[\App\Http\Controllers\Admin\MenuController::class, 'destroy'])->name('admin_menu_delete');
    Route::get('menu/show',[\App\Http\Controllers\Admin\MenuController::class, 'show'])->name('admin_menu_show');

    # Content
    Route::prefix('content')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\ContentController::class, 'index'])->name('admin_contents');
        Route::get('create',[\App\Http\Controllers\Admin\ContentController::class, 'create'])->name('admin_content_add');
        Route::post('store',[\App\Http\Controllers\Admin\ContentController::class, 'store'])->name('admin_content_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\ContentController::class, 'edit'])->name('admin_content_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ContentController::class, 'update'])->name('admin_content_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ContentController::class, 'destroy'])->name('admin_content_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ContentController::class, 'show'])->name('admin_content_show');
    });

    # Image Gelery
    Route::prefix('image')->group(function (){
        Route::get('create/{content_id}',[ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{content_id}',[ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{content_id}',[ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show',[ImageController::class, 'show'])->name('admin_image_show');
    });

    # messages
    Route::prefix('messages')->group(function (){
        Route::get('/',[MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}',[MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class, 'show'])->name('admin_message_show');
    });

    # Review
    Route::prefix('review')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}',[\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
    });


    # Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    # Faq
    Route::prefix('faq')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create',[\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store',[\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show',[\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
    });
    # Faq
    Route::prefix('payment')->group(function (){
        Route::get('/',[PaymentController::class, 'index'])->name('admin_payment');
        Route::get('create',[PaymentController::class, 'create'])->name('admin_payment_add');
        Route::post('store',[PaymentController::class, 'store'])->name('admin_payment_store');
        Route::get('edit/{id}',[PaymentController::class, 'edit'])->name('admin_payment_edit');
        Route::post('update/{id}',[PaymentController::class, 'update'])->name('admin_payment_update');
        Route::get('delete/{id}',[PaymentController::class, 'destroy'])->name('admin_payment_delete');
        Route::get('show',[PaymentController::class, 'show'])->name('admin_payment_show');
    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class, 'index'])->name('myprofile');
    Route::get('/mypayments',[UserController::class, 'mypayments'])->name('mypayments');
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreviews/{id}',[UserController::class, 'destroymyreviews'])->name('user_review_delete');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    /*Route::get('/profile',[UserController::class, 'index'])->name('userprofile');*/
    Route::prefix('content')->group(function (){
        Route::get('/',[ContentController::class, 'index'])->name('user_contents');
        Route::get('create',[ContentController::class, 'create'])->name('user_content_add');
        Route::post('store',[ContentController::class, 'store'])->name('user_content_store');
        Route::get('edit/{id}',[ContentController::class, 'edit'])->name('user_content_edit');
        Route::post('update/{id}',[ContentController::class, 'update'])->name('user_content_update');
        Route::get('delete/{id}',[ContentController::class, 'destroy'])->name('user_content_delete');
        Route::get('show',[ContentController::class, 'show'])->name('user_content_show');
    });
});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
