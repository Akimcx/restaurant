<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\StoreAdminRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            return redirect()->intended("/restaurant");
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

    public function signin(StoreAdminRequest $request): RedirectResponse
    {
        $val = $request->validated();
        // dd(Hash::make($val['password']));
        $user = User::create([
            'email' => $val['email'],
            'password' => Hash::make($val['password']),
            'name' => $val['name']
        ]);
        //Todo set user role to admin
        $user->save();
        Auth::loginUsingId($user->id);
        return to_route("dashboard.index");
    }
}
