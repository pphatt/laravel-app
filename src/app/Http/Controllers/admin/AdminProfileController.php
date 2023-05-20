<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminProfileController extends Controller
{
    public function view()
    {
        $user = DB::table('users')
            ->select("name", "first_name", "last_name", "age", "address", "phone_number", "sex", "image")
            ->where("id", "=", auth()->user()->id)
            ->get();

        return view("admin.profile", ["user" => $user]);
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

        $param = ["name", "first_name", "last_name", "age", "address", "phone_number", "sex"];
        $change = [];

        $request_query = $request->request;

        for ($i = 0; $i < count($param); $i++) {
            $value = $param[$i];

            if ($request_query->get($value) != $request_query->get("old_" . $value)) {
                $change[$value] = $request_query->get($value);
            }
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_path = time();

            Storage::disk('local')->put('public/images/' . $image_path, $image, 'public');

            $change["image"] = $image_path . "/" . $image->hashName();
        }

        if ($change) {
            DB::table("users")
                ->where("id", "=", auth()->user()->id)
                ->limit(1)
                ->update($change);
            return redirect()->route("admin.profile_get")->with("profile", "Edit profile successfully");
        } else {
            return redirect()->route("admin.profile_get")->withErrors("No edit was requested");
        }
    }
}
