<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);

        $user = Login::where('user_id', $request->user_id)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user_id', $user->user_id);
            return redirect('/home');
        }

        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function logout()
    {
        Session::forget('user_id');
        return redirect('/login');
    }
};
