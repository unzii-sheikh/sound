<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\UserController;
use App\Http\Middleware\adminmiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;



//website routes

Route::get('/', [admincontroller::class,('getmusics')]);
Route::get('/artists', function () {
    return view('fetchartist');
});
Route::get('/albums', function () {
    return view('fetchalbums');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/album2', function () {
    return view('albums-store');
});


Route::get('/page', function () {
    return view('layout');
});

//admin middleware
Route::middleware([adminmiddleware::class])->group(function(){
    //admin routes

});
Route::get('/adminindex', function () {
    return view('admin.index');
});
//genre route
Route::post("/addgenre",[admincontroller::class,("genrepost")]);
Route::get('/genre', function () {
    return view('genre');
});
//album route
Route::get('/addalbum', function () {
    return view('addingalbum');
});
Route::post("/albumadd",[admincontroller::class,("album")]);
Route::get('/adminindex', function () {
    return view('admin.index');
});
//artist form route 

 //album route datanaseconnection
route::post("/albumadding",[admincontroller::class,("album")]);
//artist route
Route::get("/artistupload",[admincontroller::class,("artistuploading")]);
Route::post("/addingartist",[admincontroller::class,("artistconnection")]);
// music route
Route::get("/getartist",[admincontroller::class,("artistdata")]);
Route::get("/musicuploading",[admincontroller::class,('artistdata')]);
Route::post('/musicupload',[admincontroller::class,('musicadd')]);
//fetch music routes
Route::get("/musicfetch",[admincontroller::class,("getmusic")]);
//delete music record
Route::post("/delete/{id}",[admincontroller::class,("deleterecord")]);
//data transfer to update page
Route::post("/update/{id}",[admincontroller::class,("updatedata")]);
//update music route
Route::post('/updaterecord',[admincontroller::class,("updatemusic")]);

//get artist on artist page not should be in middleware
Route::get("/fetchartist",[admincontroller::class,("fetalbums")]);
//get albums on artist page on website not should be in middleware
Route::get("/fetchalbums",[admincontroller::class,("fetchalb")]);
// music fetch in website
Route::get("/fetchmuiscweb",[admincontroller::class,("fetchmusicdata")]);
Route::get("/fetchmusic2cweb",[admincontroller::class,("fetchmusicdata2")]);
Route::get('/adminpanel', function () {
    return view('admin.index');
});
//admin pages
Route::get('/element', function () {
    return view('admin.element');
});
Route::get('/chart', function () {
    return view('admin.chart');
});
Route::get('/button', function () {
    return view('admin.button');
});
Route::get('/blank', function () {
    return view('admin.blank');
});
Route::get('/Addvideos', function () {
    return view('admin.Addvideos');
});
Route::get('/userinfo', function () {
    return view('admin.fetch');
});

//users rout Crud//
// Users CRUD Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Fetch all registered users
    Route::get('admin.fetch', [UserController::class, 'fetch'])->name('admin.fetch');
    // Show edit form
    Route::get('admin.users.{id}.edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.edit');

    // Update user
    Route::put('admin.users.{id}', [App\Http\Controllers\UserController::class, 'update'])->name('admin.update');

    // Delete user
    Route::delete('admin.users.{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.delete');

});
/// trash //
// Trash page
Route::get('admin.trash', [UserController::class, 'trash'])->name('admin.trash');

// Recover user
Route::post('admin.trash/{id}/recover', [UserController::class, 'recover'])->name('admin.recover');

// Permanent delete
Route::delete('admin.trash/{id}/permanent', [UserController::class, 'permanentDelete'])->name('admin.permanentDelete');


//jetstream middleware//
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

