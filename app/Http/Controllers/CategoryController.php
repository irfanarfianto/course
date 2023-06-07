<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Level;
use App\Models\Courses;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 5;
        if (strlen($katakunci)) {
            $courses = Courses::where('id', 'like', "%$katakunci%")
            ->orWhere('nama', 'like', "%$katakunci%")
            ->orWhere('jurusan', 'like', "%$katakunci%")
            ->orWhere('alamat', 'like', "%$katakunci%")
            ->orderBy('nim', 'asc')
            ->paginate($jumlahbaris);
        } else {
            $courses = Courses::orderBy('id', 'asc')->paginate($jumlahbaris);
        }

        $category = Category::all();
        $levels = Level::all();
        return view('category.index', compact('category', 'levels', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
