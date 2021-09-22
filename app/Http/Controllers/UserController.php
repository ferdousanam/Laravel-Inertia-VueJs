<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::latest()->paginate(10);
        return Inertia::render('User/Index', compact('users'));
    }

    public function create()
    {
        return Inertia::render('User/CreateEdit');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create($data);

        return Redirect::route('users.index');
    }

    public function show($id)
    {
        $user = User::find($id);

        return Inertia::render('User/Show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return Inertia::render('User/CreateEdit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'password' => ['nullable', 'string', 'min:8'],
        ]);

        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user = User::find($id);
        $user->update($data);

        return Redirect::route('users.edit', $id);
    }

    public function destroy($id)
    {
        User::destroy($id);

        return Redirect::route('users.index');
    }
}
