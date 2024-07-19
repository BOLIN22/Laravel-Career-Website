<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the input of users
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
    ]);

        // Login the user
        if (auth::attempt($credentials)) {
            // Success and redirect to other pages
            return redirect()->route('career');
        } else {
            // Fail and provide error messages
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/career');
    }
}
