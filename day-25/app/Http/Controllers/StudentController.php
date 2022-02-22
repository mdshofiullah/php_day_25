<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    protected $students;

    public function index()
    {
        $this->student = new Student();
        $this->student->newStudent();
        return 'success';


//        $this->students = Student::getAllStudent();
//
//        return view('all',[
//           'students' => $this->students
//        ]);

//        $this->name = 'SHOFI';
//        $this->city = 'Dhaka';
//        return view('all', ['data' => $this->name]);   ***** to show view this data

//        return view('all')->with([
//            'data' => $this->name,
//            'shofi' => $this->city,      ********** We can show this data to view with function by this process
//        ]);
//        $data = 'shofi';
//        $shofi = 'dhaka';
//        return view('all',compact('data','shofi'));  ******** we can show data with compact function by this process
    }
}
