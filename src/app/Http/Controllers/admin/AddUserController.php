<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddUserController extends Controller
{
    public function view()
    {
        return view("admin.add-user");
    }

    public function handle(Request $request)
    {
        DB::transaction(function () use ($request) {
            DB::table("users")->insert([
                "name" => $request->get("email"),
                "email" => $request->get("email"),
                "password" => Hash::make($request->get("password")),
                "sex" => "Male",
                "role" => ($request->get("role") == "User") ? "0" : "1"
            ]);
        });

        return view("admin.add-user")->with("success", "Add account successfully");
    }
}
