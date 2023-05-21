<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $url_parser = explode("/", $request->getPathInfo());

        if (Auth::check()) {
            if (Auth::user()->role == "1" && $url_parser[1] == "admin") {
                return $next($request);
            } else if (Auth::user()->role == "0" && $url_parser[1] == "user") {
                return $next($request);
            } else if($url_parser[1] == "reset-password") {
                return $next($request);
            } else {
                return redirect("/");
            }
        } else {
            return redirect(route("login"))->withErrors("Invalid login credentials");
        }
    }
}
