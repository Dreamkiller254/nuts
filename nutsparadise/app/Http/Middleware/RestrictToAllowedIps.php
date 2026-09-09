<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictToAllowedIps
{
    /**
     * Handle an incoming request.
     *
     * IP restriction is opt-in for staging/private deployments. Configure it in
     * config/access.php via RESTRICT_TO_ALLOWED_IPS and ALLOWED_IPS.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! config('access.restrict_to_allowed_ips', false)) {
            return $next($request);
        }

        $allowedIps = (array) config('access.allowed_ips', []);

        // Always allow localhost so server-side tasks (scheduler, queue,
        // health checks via loopback) don't get locked out.
        $allowedIps[] = '127.0.0.1';
        $allowedIps[] = '::1';

        $allowedIps = array_unique($allowedIps);

        if (! in_array($request->ip(), $allowedIps, true)) {
            abort(403, 'Access denied.');
        }

        return $next($request);
    }
}
