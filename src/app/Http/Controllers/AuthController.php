<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view("sign-in");
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(["email" => $request->get("email"), "password" => $request->get("password"), "state" => 0])) {
            $request->session()->regenerate();

            return redirect()->intended(route("home"));
        }

        return back()->withErrors("Invalid login credentials");
    }

    public function register()
    {
        return view("sign-up");
    }

    public function handleRegister(Request $request)
    {
        $request->validate([
            "email" => "required|email|unique:users",
            "password" => "required|min:7",
        ]);

        $user = User::create([
            "name" => $request->get("email"),
            "email" => $request->get("email"),
            "password" => Hash::make($request->get("password"))
        ]);

        if (!$user) {
            return redirect(route("register"))->withErrors("Email is already registered");
        }

        return redirect(route("login"));
    }

    public function handleLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route("home"));
    }

    public function handleRole()
    {
        if (Auth::user()->role == 1) {
            return redirect(route("admin.general"));
        } else {
            return redirect(route("user.general"));
        }
    }
}
