<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Category;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        // $courses = CourseController::select(
        //     'courses.course_name',
        //     'courses.teacher',
        //     'categories.category_name as category_name'
        // )
        // ->join('categories', 'courses.category_id', '=', 'categories.id')
        // ->where('courses.id', 1)
        // ->orderBy('scheduled_at', 'asc')
        // ->paginate(10);
        // //->get();
        
        // $total = count(CourseController::all());
        // return view('', compact('courses', 'total'));

        $courses = Course::all()->where('id', $id);
        return $courses;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $course = CourseController::all();
        $category = Category::all();

        return view('');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $courseName = $request->input('course_name');
        $category_id = Category::select('id')->where('category_name', $courseName)->first();
        

        CourseController::create([
            'course_name' => $request->course_name,
            'teacher' => $request->teacher,
            'category_id' => $request->$category_id
        ]);  
    
        return redirect()->route('')->with('success','Course registered successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $course = CourseController::select(
            'courses.course_name',
            'courses.teacher',
            'categories.category_name as category_name'
        )
        ->join('categories', 'courses.category_id', '=', 'categories.id')
        ->where('courses.id', 1);
        //->get();

        return view('', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $course = CourseController::find($id);
       
        return view('', compact(''));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $course = CourseController::find($id);
        $courseName = $request->input('course_name');
        $category_id = Category::select('id')->where('category_name', $courseName)->first();

        $course->update([
            'course_name' => $request->course_name,
            'teacher' => $request->teacher,
            'category_id' => $request->$category_id
        ]);  
    
        return redirect()->route('')->with('success','Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $course = UserSpecific::find($id);
        $course->delete();

        return redirect()->route('')->with('success','Course deleted successfully.');
    }
}
