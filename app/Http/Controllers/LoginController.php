<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // @desc  Show login form
    // @route GET /login
    public function login(): View
    {
        return view('auth.login');
    }


    public function authenticate(Request $request): RedirectResponse
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // dd($credentials);

        if(Auth::attempt($credentials)){
            // Regenerate the session to prevent fixation attacks
            $request->session()->regenerate();

            return redirect()->intended(route('home'))->with('success','You are logged in successfully');
        }
        else{
            return back()->withErrors([
                'email'=> 'The provided credentials do not match our records',
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout(); // Log out the user

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/');
    }
}
