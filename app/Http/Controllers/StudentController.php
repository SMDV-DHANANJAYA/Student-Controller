<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class StudentController extends Controller
{
    function saveStudent(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        $students = Student::all();
        return view('student-view')->with('students',$students);
    }

    function deleteStudent($id){
        $student = Student::find($id);
        $student->delete();

        $students = Student::all();
        return view('student-view')->with('students',$students);
    }

    function update($id){
        $student = Student::find($id);
        return view('update-view')->with('students',$student);
    }

    function updateStudent(Request $request){
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        $students = Student::all();
        return view('student-view')->with('students',$students);
    }
}
