<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditAccountController extends Controller
{
    public function view($id)
    {
        $user = DB::table("users")
            ->select("users.id as id", "users.name as name", "users.first_name as first_name",
                "users.last_name as last_name", "users.age as age", "users.address as address",
                "users.phone_number as phone_number", "users.sex as sex", "users.role as role", "users.state as status")
            ->where("id", "=", $id)
            ->limit(1)
            ->get();

        return view("admin.edit-account", ["user" => $user, "id" => $id]);
    }

    public function handle(Request $request, $id)
    {
        DB::table("users")
            ->where("id", "=", $id)
            ->limit(1)
            ->update([
                "name" => $request->get("name"),
                "first_name" => $request->get("first_name"),
                "last_name" => $request->get("last_name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "phone_number" => $request->get("phone_number"),
                "role" => ($request->get("role") == "user") ? "0" : "1",
            ]);

        return redirect()->route("admin.manage_account")->with("edit", "Edit Account Successfully");
    }
}
