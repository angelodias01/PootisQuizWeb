<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function checkAllUsers()
    {
        $users = User::orderBy('created_at')->get();
        return view('admin.users.checkUsers', compact('users'));
    }
    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('check.all.users')->with('success', 'User deleted successfully!');
    }




    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'is_admin' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('admin.users.index')->with('success', 'User created successfully!');
    }
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required',
            'is_admin' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully!');
    }
}
