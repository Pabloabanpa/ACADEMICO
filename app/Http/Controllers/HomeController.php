<?php

namespace App\Http\Controllers;

use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // o con paginación
        return view('welcome', compact('courses'));
    }
}
