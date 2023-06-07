<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;


class AdminCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::orderBy('id', 'asc')->paginate(5);    
        return view('admin.index') ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kursus' => 'required',
            'biaya' => 'numeric|min:0',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048', // validasi untuk gambar (hanya file gambar dengan format jpeg, png, jpg dengan maksimal ukuran 2MB)
        ], [
            'nama_kursus.required' => 'Nama kursus harus diisi.',
            'biaya.numeric' => 'Biaya harus berupa angka.',
            'biaya.min' => 'Biaya tidak boleh kurang dari 0.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Format gambar yang diperbolehkan adalah jpeg, png, jpg.',
            'gambar.max' => 'Ukuran gambar tidak boleh melebihi 2MB.',
        ]);

        $kursus = Kursus::create([
            'nama_kursus' => $request->input('nama_kursus'),
            'deskripsi' => $request->input('deskripsi'),
            'instruktur' => $request->input('instruktur'),
            'durasi' => $request->input('durasi'),
            'tingkat_kesulitan' => $request->input('tingkat_kesulitan'),
            'biaya' => $request->input('biaya'),
            'materi_topik' => $request->input('materi_topik'),
            'sertifikat' => $request->input('sertifikat'),
            'gambar' => $gambarUrl,
        ]);

        if ($request->hasFile('gambar')) {
            $gambarUrl = $request->file('gambar')->store('images/kursus');
            $kursus->gambar = $gambarUrl;
            $kursus->save();
        }

        return redirect()->route('admin.index')->with('success', 'Kursus berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kursus $kursus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kursus $kursus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kursus $kursus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kursus $kursus)
    {
        //
    }
}
