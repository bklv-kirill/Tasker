<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\{
    LoginController as UsersLoginController,
    LogOutController as UsersLogOutController,
    RegisterController as UsersRegisterController,
    StoreController as UsersStoreController,
    AuthController as UsersAuthController,
};
use App\Http\Controllers\Tasks\{
    IndexController as TasksIndexController,
    StoreController as TasksStoreController,
    DeleteController as TasksDeleteController,
    EditController as TaskEditController,
    UpdateController as TasksUpdateController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware("auth")->group(function () {
    Route::view("/", "main");

    Route::name("users.")->group(function () {
        Route::get("logout", UsersLogOutController::class)->name("logout");
    });

    Route::name("tasks.")->group(function () {
        Route::get("tasks", TasksIndexController::class)->name("index");
        Route::get("tasks/{task}", TaskEditController::class)->name("edit");
        Route::post("tasks", TasksStoreController::class)->name("store");
        Route::delete("tasks/{task}", TasksDeleteController::class)->name("delete");
        Route::patch("tasks/{task}", TasksUpdateController::class)->name("update");
    });
});

Route::name("users.")->middleware("guest")->group(function () {
    Route::get("login", UsersLoginController::class)->name("login");
    Route::get("register", UsersRegisterController::class)->name("register");
    Route::post("login", UsersAuthController::class)->name("auth");
    Route::post("register", UsersStoreController::class)->name("store");
});

