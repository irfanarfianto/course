<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa.home');
    }
}
