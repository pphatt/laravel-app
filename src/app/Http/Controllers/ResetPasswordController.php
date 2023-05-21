<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function view() {
        return view("reset-password");
    }

    public function handle(Request $request) {
        $request->validate([
            "password" => "required|regex:/^.*(?=.{4,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/",
        ]);

        DB::table("users")
            ->where("id", "=", auth()->user()->id)
            ->limit(1)
            ->update([
                "password" => Hash::make($request->get("password"))
            ]);

        if (auth()->user()->role == "0") {
            return redirect()->route("user.general")->with("reset", "Reset password successfully");
        } else {
            return redirect()->route("admin.general")->with("reset", "Reset password successfully");
        }
    }
}
