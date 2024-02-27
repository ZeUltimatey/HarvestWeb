<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{

    public function store(Request $request){
        $validated = $request->validate([
            "nosaukums" => "required|max:255",
            "teksts" => "required",
            "banera_adrese" => "required|max:255",
            "cilveku_skaita"  => "required|integer",
        ]);

        $course = Course::create($validated);
        return response()->json($course);
    }

    public function index() {
        return response()->json(Course::all());
    }
}
