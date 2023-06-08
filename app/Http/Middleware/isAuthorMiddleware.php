<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class isAuthorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        // if(Auth::user()->role_id == 2)
        {
            return $next($request);
        }

        else{
            return redirect()->route('login');
        }
    }
}
