<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index() {
        $students=Student::with(['documents'])->orderBy('id','desc')->get();
        return view('students.index',['students'=>$students]);
    }
}
