<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserManageController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")
    ->as("admin.")
     ->middleware(["auth", "admin_auth"])
    ->group(function () {
        Route::get("/", [AdminController::class, "index"])->name("index");

        Route::prefix("category")
            ->as("categories.")
            ->group(function () {
                Route::get("/", [CategoryController::class, "index"])->name("index");
                Route::get("create", [CategoryController::class, "create"])->name("create");
                Route::post("store", [CategoryController::class, "store"])->name("store");
                Route::get("edit/{id}", [CategoryController::class, "edit"])->name("edit");
                Route::put("update/{id}", [CategoryController::class, "update"])->name("update");
                Route::delete("destroy/{id}", [CategoryController::class, "destroy"])->name("destroy");
            });

        Route::prefix("product")
            ->as("products.")
            ->group(function () {
                Route::get("/", [ProductController::class, "index"])->name("index");
                Route::get("create", [ProductController::class, "create"])->name("create");
                Route::post("store", [ProductController::class, "store"])->name("store");
                Route::get("edit/{id}", [ProductController::class, "edit"])->name("edit");
                Route::put("update/{id}", [ProductController::class, "update"])->name("update");
                Route::delete("destroy/{id}", [ProductController::class, "destroy"])->name("destroy");
            });

        Route::prefix("user")
            ->as("users.")
            ->group(function () {
                Route::get("/", [UserManageController::class, "index"])->name("index");
                Route::get("create", [UserManageController::class, "create"])->name("create");
                Route::post("store", [UserManageController::class, "store"])->name("store");
                Route::get("change-admin/{id}", [UserManageController::class, "changeAdmin"])->name("change.admin");
                Route::get("change/active/{id}", [UserManageController::class, "changeActive"])->name("change.active");
                Route::get("edit/{id}", [UserManageController::class, "edit"])->name("edit");
                Route::put("update/{id}", [UserManageController::class, "update"])->name("update");
                Route::delete("destroy/{id}", [UserManageController::class, "destroy"])->name("destroy");
            });

        Route::prefix("manager")
            ->as("managers.")
            ->group(function () {
                Route::get("/", [ManagerController::class, "index"])->name("index");
                Route::get("create", [ManagerController::class, "create"])->name("create");
                Route::post("store", [ManagerController::class, "store"])->name("store");
                Route::get("change-user/{id}", [ManagerController::class, "changeUser"])->name("change.user");
                Route::get("change/active/{id}", [ManagerController::class, "changeActive"])->name("change.active");
                Route::get("edit/{id}", [ManagerController::class, "edit"])->name("edit");
                Route::put("update/{id}", [ManagerController::class, "update"])->name("update");
                Route::delete("destroy/{id}", [ManagerController::class, "destroy"])->name("destroy");
            });
    });

Route::get('/contact',function (){
    return view('client.contact');
})->name('contact');
Route::get('/blog',function (){
    return view('client.blog');
})->name('blog');
Route::get('/about',function (){
    return view('client.about');
})->name('about');

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"])->name('home');
Route::get('/list',[\App\Http\Controllers\HomeController::class,'menu'])->name('list');
Route::get('/detail/{id}',[\App\Http\Controllers\HomeController::class,'detail'])->name('detail');
Route::get('/listShop/{ctg_id}',[\App\Http\Controllers\HomeController::class,'listShop'])->name('listShop');

Route::get('/login', [\App\Http\Controllers\UserController::class,'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\UserController::class,'postLogin'])->name('postLogin');
Route::get('/logout', [\App\Http\Controllers\UserController::class,'logout'])->name('logout');
Route::get('/register', [\App\Http\Controllers\UserController::class,'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\UserController::class,'postRegister'])->name('postRegister');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [\App\Http\Controllers\UserController::class,'home'])->name('user.home');
    Route::put('/user/edit/{user}',[\App\Http\Controllers\UserController::class,'update'])->name('user.update');

    Route::get('/user/change/{user}', [\App\Http\Controllers\UserController::class,'change'])->name('change');
    Route::post('/user/change/{user}', [\App\Http\Controllers\UserController::class,'userChange'])->name('user.change');
});

// mail

