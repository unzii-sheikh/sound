<?php

use App\Http\Middleware\adminmiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//wewbsite routes

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
//Admin Sidebar
Route::get('/Addvideos',function(){
    return view('Addvideos');
});

//admin middleware
route::middleware([adminmiddleware::class])->group(function(){
    //admin routes
Route::get('/dashboard', function () {
    return view('dashboard');
});
    
});
Route::get('/adminpanel', function () {
    return view('admin.index');
});
//login route
// Route::get('/login',function(){
//     return view('login');
// });

//Registration route
// Route::get('/registration',function(){
//     return view('registration');
// });


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
