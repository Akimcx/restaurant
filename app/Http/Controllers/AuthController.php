<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function loginView(Request $request)
    {
        return view("auth.login");
    }
    public function login(AuthLoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
            return redirect()->intended("home.restaurant");
        }
        return redirect()->back()->withErrors(["email" => "Invalid Email"]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function signinView(Request $request)
    {
        return view('auth.signin');
    }

    public function signin(Request $request)
    {
        $this->validate($request, []);
        $request->session()->put("", $request->input());
        return redirect("");
    }
}
