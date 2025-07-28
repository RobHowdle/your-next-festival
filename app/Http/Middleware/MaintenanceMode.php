<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if maintenance mode is enabled via environment variable
        $maintenanceEnabled = env('MAINTENANCE_MODE_ENABLED', false);

        // Don't redirect if already on maintenance page or if maintenance is disabled
        if (!$maintenanceEnabled || $request->is('maintenance') || $request->is('maintenance/*')) {
            return $next($request);
        }

        // Redirect to maintenance page
        return redirect()->route('maintenance');
    }
}
