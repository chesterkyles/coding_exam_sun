<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Database\Eloquent\Model;

class AuthResource
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->route('user');
        $user_id = ($user instanceof Model) ? $user->account_id : $user;
        if ($user_id != auth()->user()->account_id) {
            return abort(403, 'Unauthorized action.');;
        }

        return $next($request);
    }
}
