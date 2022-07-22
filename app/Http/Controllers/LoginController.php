<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("inventory.autentikasi.login");
    }

    public function autentikasi(Request $request)
    {
        $credentials = $request->validate([
            'username'     => 'required',
            'password'  => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal, silahkan cek username dan password anda!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('Login'))->with('Logout', 'Anda telah logout.');
    }
}
