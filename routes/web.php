<?php

// use App\Models\User;

use App\Http\Controllers\AdminCategoryController;
use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/tes/{slug}', function ($slug) {
    $post = Posts::where('slug','=',"$slug")->limit(1)->get();
    if($post->count()>0){
        return view('coba',[
            'title'=>"Coba",
            // 'jumlah'=>$post->count(),
            'posts'=>$post
        ]);
    }else{
        return view('tes',[
            'title'=>"Tes"
        ]);
    }
});

Route::get('/create',fn()=>view('ajax.create'));



Route::get('/', function () {
    return view('home',[
        'active'=>'home',
        "title"=>'Home',
        "nama"=>"Guntur"
    ]);
})->name('home');

Route::get('/blog', [PostsController::class,'index']);

Route::get('/blog/search', [PostsController::class,'index']);

// Halaman single route
Route::get('/blog/post/{slug}', [PostsController::class,'single']);


Route::get('/blog/category',[function(){
    return view('categories',[
        'title'=>"Post Categories",
        'categories'=>Categories::limit(10)->get(),
        'active'=>'category',
    ]);
}]);

Route::get('/about', function () {
    return view('about',[
        'active'=>'about',
        "title"=>'About',
        "nama"=>"Guntur Wahyudi",
        "instansi"=>"Universitas Jember",
        "image"=>"gunz.png"
    ]);
});

Route::get('/laravel', function () {
    return view('welcome',[
        "title"=>'Laravel',
    ]);
});

Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', fn() => view('dashboard.index',['title'=>'Dashboard',]))->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth')->except(['checkSlug']);


Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');