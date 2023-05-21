<?php

use App\Http\Controllers\admin\AddProductController;
use App\Http\Controllers\admin\AddUserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\DeleteAccountController;
use App\Http\Controllers\admin\DeleteProductController;
use App\Http\Controllers\admin\EditAccountController;
use App\Http\Controllers\admin\EditProductController;
use App\Http\Controllers\admin\ManageAccountController;
use App\Http\Controllers\admin\ManageProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\user\OrderController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\UserProfileController;
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

//Route::get("/products")

Route::group(["middleware" => ["auth", "role"]], function () {
    Route::prefix("user")->group(function () {
        Route::get("/general", [UserController::class, "general"])->name("user.general");

        Route::get("/profile", [UserProfileController::class, "view"])->name("user.profile_get");
        Route::post("/profile", [UserProfileController::class, "handle"])->name("user.profile_post");

        Route::get("/billings", [UserController::class, "billing"])->name("user.billing");

        Route::get("/order", [OrderController::class, "view"])->name("user.order");

        Route::get("/order/{id}", [OrderController::class, "view_details"])->name("user.order_detail");
    });

    Route::prefix("admin")->group(function () {
        Route::get("/general", [AdminController::class, "general"])->name("admin.general");

        Route::get("/profile", [AdminProfileController::class, "view"])->name("admin.profile_get");
        Route::post("/profile", [AdminProfileController::class, "handle"])->name("admin.profile_post");

        Route::get("/manage-account", [ManageAccountController::class, "view"])->name("admin.manage_account");
        Route::get("/manage-account/{id}", [ManageAccountController::class, "view_details"])->name("admin.account_details");

        Route::get("/add-account", [AddUserController::class, "view"])->name("admin.add_user_get");
        Route::post("/add-account", [AddUserController::class, "handle"])->name("admin.add_user_post");

        Route::get("/edit-account/{id}", [EditAccountController::class, "view"])->name("admin.edit_account_get");
        Route::post("/edit-account/{id}", [EditAccountController::class, "handle"])->name("admin.edit_account_post");

        Route::post("/delete-account/{id}", [DeleteAccountController::class, "handle"])->name("admin.delete_account_post");

        Route::get("/manage-product", [ManageProductController::class, "view"])->name("admin.manage_product");
        Route::get("/manage-product/{id}", [ManageProductController::class, "view_details"])->name("admin.product_details");

        Route::get("/add-product", [AddProductController::class, "view"])->name("admin.add_product_get");
        Route::post("/add-product", [AddProductController::class, "handle"])->name("admin.add_product_post");

        Route::get("/edit-product/{id}", [EditProductController::class, "view"])->name("admin.edit_product_get");
        Route::post("/edit-product/{id}", [EditProductController::class, "handle"])->name("admin.edit_product_post");

        Route::post("/delete-product/{id}", [DeleteProductController::class, "handle"])->name("admin.delete_product_post");
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

Route::get("/products/{id}", [ProductController::class, "view"])->name("products");

Route::fallback(function () {

});
