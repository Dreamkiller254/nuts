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
     * Blocks every IP except the allow-listed ones.
     * Set the list in .env: ALLOWED_IPS=41.90.178.12,1.2.3.4
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedIps = array_filter(array_map(
            'trim',
            explode(',', (string) env('ALLOWED_IPS', '41.90.178.12'))
        ));

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
