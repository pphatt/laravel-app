<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function general() {
        return view("admin.general");
    }

    public function manageAccount() {
        $users = DB::table("users")
            ->select("users.id as id", "users.role as role", "users.email as email", "users.name as name", "users.age as age",
                "users.address as address", "users.phone_number as phone_number", "users.sex as sex", "users.created_at as created_at")
            ->get();

        return view("admin.manage-account", ["users" => $users]);
    }
}
