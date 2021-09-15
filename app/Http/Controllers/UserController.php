<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate(10);
        return Inertia::render('User/Index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);

        return Inertia::render('User/Show', compact('user'));
    }
}
