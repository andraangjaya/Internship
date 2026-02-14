<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
    public function inputStudents(Request $request)
    {
        $request->validate([
            'studentName' => 'required|min:3'
        ]);

        $students = session('students', []);
        $students[] = $request->studentName;
        session(['students' => $students]);

        return redirect('students') -> with('success', 'student added');
    }

    public function getStudents(Request $request)
    {
        $show = $request->query('show', false);
        $students = $show ? session('students', []) : [];
        return view('student', compact('students', 'show'));
    }
}



