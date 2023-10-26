<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAdminRequest;
use App\Http\Requests\StoreAdminRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function loginView(): View | RedirectResponse
    {
        $user = Auth::user();
        if ($user) {
            return to_route("dashboard.index", ["user" => $user]);
        }
        return view("admin.login");
    }
    public function signinView(): View
    {
        return view("admin.signin");
    }

    //Todo maybe mergable with AuthController::login
    public function login(LoginAdminRequest $request): RedirectResponse | View
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard.index');
        }
        time_nanosleep(1, 0);
        return back()->withErrors([
            'email' => 'Incorrect email',
        ])->onlyInput('email');
    }
    public function signin(StoreAdminRequest $request): RedirectResponse
    {
        $val = $request->validated();
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
