<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
//use Illuminate\Http\Request;
use Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): ?string
    {
        return $request->expectsJson() ? null : (Request::is("admin") ? route("admin.getlogin"):  route('login'));
    }
}
