<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class DeleteAccountController extends Controller
{
    public function handle($id) {
        DB::table("users")
            ->where("id", "=", $id)
            ->limit(1)
            ->update([
                "state" => "1"
            ]);

        return redirect()->route("admin.manage_account")->with("delete", "Delete user account successfully");
    }
}
