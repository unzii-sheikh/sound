<?php

use App\Http\Controllers\admincontroller;
use App\Http\Middleware\adminmiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

//website routes

Route::get('/', function () {
    return view('index');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/album', function () {
    return view('album-store');
});


Route::get('/page', function () {
    return view('layout');
});

//admin middleware
route::middleware([adminmiddleware::class])->group(function(){
    //admin routes
Route::get('/dashboard', function () {
    return view('dashboard');
});
});
//genre route
route::post("/addgenre",[admincontroller::class,("genrepost")]);
Route::get('/genre', function () {
    return view('genre');
});
//artist route
Route::get('/addalbum', function () {
    return view('addingalbum');
});
route::post("/albumadd",[admincontroller::class,("album")]);
//album route
Route::get("/artistupload",[admincontroller::class,("artistuploading")]);
Route::post("/addartist",[admincontroller::class,("artistconnection")]);
// music route
Route::get("/getartist",[admincontroller::class,("artistdata")]);
Route::get("/musicuploading",[admincontroller::class,('artistdata')]);
Route::post('/musicupload',[admincontroller::class,('musicadd')]);
//fetch music routes
Route::get("/musicfetch",[admincontroller::class,("getmusic")]);



Route::get('/adminpanel', function () {
    return view('admin.index');
});
Route::get('/widget', function () {
    return view('admin.widget');
});
Route::get('/blank', function () {
    return view('admin.blank');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->role == "admin"){

            return view('dashboard');
        }
        else{
            return redirect("/");
        }
    })->name('dashboard');
});
