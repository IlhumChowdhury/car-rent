<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param string|null ...$guards
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::User()->hasanyrole('Admin')) {
                return redirect(RouteServiceProvider::HOME);
                //     return redirect(route('home'));
                }else if (Auth::User()->hasanyrole('Customer')) {
                    return redirect(route('rent-car'));
                 } else {
                    return redirect(route('home'));
                }
            }
        }

        return $next($request);
    }
}
