<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;


class AuthController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function daftar(){
        return view('auth/register');
    }

    public function login(LoginRequest $r){
        if ($r->validated()) {
            if (Auth::guard('web')->attempt([
                'email'=> $r->email, 
                'password' => $r->password])) {
                
                return redirect('home')->with('pesan', ' berhasil login');
            }else{
                return back()->with('pesan', ' login gagal');
            }
        }
    }

    // 
    public function register(RegisterRequest $r){
        if ($r->validated()) {
            User::create([
                    'name' => $r->name,
                    'email' => $r->email,
                    'password' => Hash::make($r->password)
                ]);
                return redirect('/')->with('pesan', 'register berhasil');
        }
    }
    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
