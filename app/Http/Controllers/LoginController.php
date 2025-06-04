<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function proses(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('nisn', $request->nisn)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            // Simpan nama siswa ke session agar bisa ditampilkan di frontend
            session(['nama_siswa' => $user->name]);
            return redirect('/frontend'); // ganti dengan route frontend tujuan
        }
        return back()->with('error', 'NISN atau password salah!');
    }
}
