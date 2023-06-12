<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(Request $request, User $user)
    {
        $user = auth()->user();
        // Logika untuk menampilkan profil pengguna berdasarkan peran
        if ($user->role === 'siswa') {
            return view('siswa.profile.index', ['user' => $user]);
        } elseif ($user->role === 'pengajar') {
            return view('pengajar.profile', ['user' => $user]);
        }
    }
}
