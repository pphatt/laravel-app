<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function view() {
        return view("reset-password");
    }

    public function handle() {

    }
}
