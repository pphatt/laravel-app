<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ManageAccountController extends Controller
{
    public function view() {
        $users = DB::table("users")
            ->select("users.id as id", "users.role as role", "users.email as email", "users.name as name", "users.age as age",
                "users.address as address", "users.phone_number as phone_number", "users.sex as sex", "users.created_at as created_at", "users.state as state")
            ->get();

        return view("admin.manage-account", ["users" => $users]);
    }

    public function view_details($id) {
        $user = DB::table("users")
            ->select("id", "name", "email", "email_verified_at", "created_at", "updated_at", "first_name", "last_name", "age", "address", "phone_number", "sex", "role")
            ->where("id", "=", $id)
            ->get();

        return view("admin.[slug-user]", ["user" => $user]);
    }
}
