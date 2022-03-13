<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web', ['except' => 'logout']);
    }

    /**
     * Show a login form
     *
     * @return \Illuminate\Http\Response
     */
    public function loginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(LoginFormRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials, $request->remember_token)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->withErrors([
            'errors' => 'Podaci koje ste uneli nisu tacni.'
        ]);
    }

    /**
     * Show a register form
     *
     * @return \Illuminate\Http\Response
     */
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(RegisterFormRequest $request)
    {
        User::create($request->validated());

        return redirect()->intended('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
