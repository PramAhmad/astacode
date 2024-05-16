<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    // store login
    public function storeLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors([
            'email' => 'Pastikan Username dan Password benar',
        ]);
    }

    // create account
    public function createAccount()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'pram@mail.com',
            'password' => bcrypt('tasikmalaya'),
        ]);
        $user->assignRole('superadmin');

        return $user;

    }
    public function logout(Request $request)
    {
        Auth::logout();
        
    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
        
    }
}
