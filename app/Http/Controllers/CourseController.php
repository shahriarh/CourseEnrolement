<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;


class CourseController extends Controller
{
    public function create()
    {
      return view('coursecreate');
    }

    public function store(Request $request)
    {
  
      $request->validate([
        'name'         => 'required|max:150',
        'price'        => 'required',
      ]);


      $course = new Course;
  
      $course->name = $request->name;
      $course->price = $request->price;
    
      $course->save();
        
      //$course->users()->sync($request->users,false);
  
      return redirect()->route('course.create');
    }

  
    public function index()
    {
      $courses = Course::orderBy('id', 'desc')->get();
      return view('allcourses', compact('courses'));
    }

    public function enroll(Request $request)
    {
      $users = new User;
      $courses = new Course;

      $courses = Course::with('courses')->first();
      $users = User::with('users')->first();
      $courses->users()->sync($request->users,false);
      $users->courses()->sync($request->courses,false);

      return view('courseenrolled', compact('courses','users'));

      //return redirect()->route('courses');
    }


}
