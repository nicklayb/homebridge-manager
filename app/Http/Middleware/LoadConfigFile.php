<?php

namespace App\Http\Middleware;

use Closure;

class LoadConfigFile
{
    public function handle($request, Closure $next)
    {
        App\ConfigFile::instanciate();
        return $next($request);
    }
}
