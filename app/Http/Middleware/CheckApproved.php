<?php



namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckApproved
{
    public function handle($request, Closure $next)
    {

        if (Auth::check()) {

            if (Auth::user()->is_approved || Auth::user() !== 'Admnistrador') {
                return $next($request);
            } else {

                return redirect()->route('not.approved');
            }
        }

        return redirect()->route('site.login');
    }
}
