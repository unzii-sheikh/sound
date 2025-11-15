<?php

use App\Http\Middleware\adminmiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
