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

        $param = ["name", "first_name", "last_name", "age", "address", "phone_number", "sex", "role"];
        $change = [];

        $request_query = $request->request;

        for ($i = 0; $i < count($param); $i++) {
            $value = $param[$i];

            if ($request_query->get($value) != $request_query->get("old_" . $value)) {
                $change[$value] = $request_query->get($value);
            }
        }

        if ($change) {
            DB::table("users")
                ->where("id", "=", $id)
                ->limit(1)
                ->update($change);
            return redirect()->route("admin.manage_account")->with("edit", "Edit account successfully");
        } else {
            return back()->withErrors("No edit was requested");
        }
    }
}
