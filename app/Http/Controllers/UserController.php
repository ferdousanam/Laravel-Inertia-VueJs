<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    protected $users = [
        [
            'id' => 1,
            'name' => 'Ferdous Anam',
        ],
        [
            'id' => 2,
            'name' => 'Rashikul Rony',
        ],
        [
            'id' => 2,
            'name' => 'Atik Bin Hasmee',
        ],
    ];

    public function index(Request $request)
    {
        $users = $this->users;
        return Inertia::render('User/Index', compact('users'));
    }

    public function show($id)
    {
        return Inertia::render('User/Show', [
            'user' => $this->users[$id],
        ]);
    }
}
