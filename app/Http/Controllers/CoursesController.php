<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Category;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::with('category', 'levels')->get();
        return view('category.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();

        return view('courses.create', compact('category'));
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
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
