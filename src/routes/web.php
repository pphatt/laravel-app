<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\user\OrderController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

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

Route::group(["middleware" => ["auth", "role"]], function () {
    Route::prefix("user")->group(function () {
        Route::get("/general", [UserController::class, "general"])->name("user.general");

        Route::get("/billings", [UserController::class, "billing"])->name("user.billing");

        Route::get("/order", [OrderController::class, "view"])->name("user.order");

        Route::get("/order/{id}", [OrderController::class, "view_details"])->name("user.order_detail");
    });

    Route::prefix("admin")->group(function () {
        Route::get("/general", [AdminController::class, "general"])->name("admin.general");

        Route::get("/manage-account", [AdminController::class, "manageAccount"])->name("admin.manage_account");
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

Route::get("/shop", [ShopController::class, "view"])->name("shop");

Route::fallback(function () {

});
