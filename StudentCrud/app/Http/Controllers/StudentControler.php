<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;

class StudentControler extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id', 'desc')->paginate(10);
        return view('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(StudentRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('students.index')->with('success', 'Studen created successfully!');
    }
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }
    public function update(StudentRequest $request, Student $student)
    {
        $student->fill($request->validated())->save();
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }

}
