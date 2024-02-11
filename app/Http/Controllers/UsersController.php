<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $user->password = Hash::make($request['password']);
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
    public function showLoginForm()
    {
        return view('admin.loginform');
    }

    public function login(Request $request)
    {
        // Validate login credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->is_admin == 1) {
                return redirect()->route('admin');
            } else {
                Auth::logout();
                return redirect()->route('admin.loginform')->withInput()->withErrors(['email' => 'You do not have permission to access the admin dashboard.']);
            }
        }

        // If authentication fails, redirect back with error message
        return redirect()->route('admin.loginform')->withInput()->withErrors(['email' => 'Invalid email or password.']);
    }
}
