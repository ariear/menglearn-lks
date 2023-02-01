<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function store_login(Request $request){
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();

            flash()->addSuccess('Selamat !! Anda berhasil login');
            return redirect()->intended('/');
        }

        flash()->addError('Email/Password Salah');
        return back();
    }

    public function store_register(Request $request){
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4'
        ]);

        $validasi['password'] = bcrypt($validasi['password']);

        User::create($validasi);

        flash()->addSuccess('Registrasi Berhasil, Ayo Login');
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();

        flash()->addSuccess('Anda berhasil Logout');
        return redirect('/');
    }
}
