<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $counts = [
            'users_count' => User::count(),
        ];
        return Inertia::render('Dashboard/Index', compact('counts'));
    }
}
