<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class MaintenanceController extends Controller
{
    public function show()
    {
        return Inertia::render('Maintenance', [
            'facebookUrl' => env('FACEBOOK_URL', 'https://facebook.com/yournextfestival'),
            'discordUrl' => env('DISCORD_URL', 'https://discord.gg/yournextfestival'),
        ]);
    }
}
