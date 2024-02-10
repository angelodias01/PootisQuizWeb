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
    public function createUser()
    {
        return view('admin.users.createUser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = new User();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->is_admin = 1;
        $user->created_at = now();
        $user->updated_at = null;
        $user->save();


        return redirect()->route('check.all.users')->with('success', 'User created successfully!');
    }

    public function editUser($user)
    {
        $user = User::findOrFail($user);
        return view('admin.users.editUser', compact('user'));
    }
    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required'
        ]);

        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->is_admin = $request['is_admin'];
        $user->updated_at = now();
        $user->save();

        return redirect()->route('check.all.users')->with('success', 'User updated successfully!');
    }
}
