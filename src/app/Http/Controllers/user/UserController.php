<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function general() {
        return view("user.general");
    }

    public function billing() {
        return view("user.billing");
    }
}
