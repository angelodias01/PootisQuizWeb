<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkAllUsers()
    {
        $user = User::select('userId', 'username', 'email', 'password', 'is_admin','created_at')->get();

        return view('/admin/users/checkUsers', compact('user'));
    }
}
