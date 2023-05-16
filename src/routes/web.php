<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

Route::get("/", [HomeController::class, "index"])->name("home");

Route::group(["middleware" => "auth"], function () {
    Route::prefix("user")->group(function () {
        Route::get("/general", function () {
            return view("user.general");
        })->name("user.general");

        Route::get("/billings", function () {
            return view("user.billing");
        })->name("user.billing");

        Route::get("/order", [OrderController::class, "view"])->name("user.order");

        Route::get("/order/{id}", [OrderController::class, "view_details"])->name("user.order_detail");
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::group(["middleware" => "guest"], function () {
        Route::get("/sign-in", "login")->name("login");
        Route::post("/sign-in", "handleLogin")->name("login.post")->middleware("guest");

        Route::get("/sign-up", "register")->name("register");
        Route::post("/sign-up", "handleRegister")->name("register.post");
    });

    Route::get("/logout", "handleLogout")->name("logout");
});

Route::get("/shop", function () {
})->name("shop");

Route::fallback(function () {

});
