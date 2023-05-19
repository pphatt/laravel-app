<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function view()
    {
        $user = DB::table('users')
            ->select("name", "first_name", "last_name", "age", "address", "phone_number", "sex")
            ->where("id", "=", auth()->user()->id)
            ->get();

        return view("user.profile", ["user" => $user]);
    }

    public function handle(Request $request)
    {
        $request->validate([
            "name" => "max:100",
            "first_name" => "max:100",
            "last_name" => "max:100",
            "age" => "numeric|max:99",
            "phone_number" => "numeric",
        ], [
            "name.max:99" => "Username must be less than 100 characters",
            "first_name.max:99" => "First name must be less than 100 characters",
            "last_name.max:99" => "Last name must be less than 100 characters",
            "age.numeric" => "Age must be number",
            "age.max:99" => "Age must be less than 99",
            "phone_number.numeric" => "Phone number contains only digits",
        ]);

        DB::table("users")
            ->where("id", "=", auth()->user()->id)
            ->limit(1)
            ->update([
                "name" => $request->get("user_name"),
                "first_name" => $request->get("first_name"),
                "last_name" => $request->get("last_name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "phone_number" => $request->get("phone_number"),
                "sex" => $request->get("sex"),
            ]);

        return redirect()->route("user.profile_get")->with("profile", "Edit profile successfully");
    }
}