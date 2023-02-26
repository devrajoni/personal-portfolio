<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        if (! auth()->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return redirect()
                ->route('login')
                ->withInput([
                    'email' => $request->email,
                ])
                ->withErrors([
                    'email' => __('auth.failed'),
                ]);
        }

        return redirect()->route('backend.dashboard');
    }
}
