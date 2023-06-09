<?php

namespace App\Http\Controllers\Pengajar;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Level;

class PengajarCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $courses = Courses::where('pengajar_id', auth()->user()->id)->get();
        $courses = Courses::all();
        return view('Pengajar.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $levels = Level::all();

        return view('Pengajar.courses.create', compact('category', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'nullable',
            'pengajar_id' => 'required|exists:pengajars,id',
            'category_id' => 'required|exists:categories,id',
            'level_id' => 'required|exists:levels,id',
            'duration' => 'required|integer',
            'total_videos' => 'required|integer',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'is_discount_enabled' => 'boolean',
            'additional_information' => 'nullable',
        ]);

        Courses::create($validatedData);

        return redirect()->route('pengajar.courses.index')->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
