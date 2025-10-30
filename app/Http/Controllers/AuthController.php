<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login-form');
    }

    public function register()
    {
        return view('register-form');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate(
            [
                'name' => 'required|string',
                'password' => 'required|string|min:8|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/',
            ],
            [
                'name.required' => 'name wajib diisi',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Password minimal 8 karakter',
                'password.regex' => 'Password harus mengandung huruf besar, huruf kecil, dan angka',
            ]
        );

        // Cek kredensial
        $credentials = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Login berhasil
            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('success', 'Login berhasil! Selamat datang, ' . Auth::user()->name);
        }

        // Login gagal
        return back()->withErrors([
            'name' => 'name atau password salah',
        ])->withInput($request->only('name'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('dashboard')->with('success', 'Logout berhasil');
    }

    public function processRegister(Request $request)
    {
        // Validasi input
        $request->validate(
            [
                'name' => 'required|string|min:4|max:50|unique:users,name',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/',
                'password_confirmation' => 'required|same:password',
            ],
            [
                'name.required' => 'name wajib diisi',
                'name.min' => 'name minimal 4 karakter',
                'name.unique' => 'name sudah digunakan',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Password minimal 8 karakter',
                'password.regex' => 'Password harus mengandung huruf besar, huruf kecil, dan angka',
                'password_confirmation.required' => 'Konfirmasi password wajib diisi',
                'password_confirmation.same' => 'Konfirmasi password tidak cocok',
            ]
        );

        // Simpan user baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Hash password
        $user->save();

        // Login otomatis setelah register
        Auth::login($user);

        // Redirect ke dashboard
        return redirect()->route('dashboard')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->name);
    }
}
