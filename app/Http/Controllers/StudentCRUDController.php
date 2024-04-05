<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('pages.students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.frontend.studentCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'roll' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ]);

        // Create a new Student instance with the validated data
        $student = Student::create($validatedData);

        // Optionally, you can redirect the user after saving the data
        return redirect()->route('students')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('pages.frontend.studentUpdate', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'roll' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ]);

        // Update the student instance with the validated data
        $student = Student::findOrFail($id);
        $student->update($validatedData);

        // Optionally, you can redirect the user after updating the data
        return redirect()->route('students')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the student by ID
        $student = Student::findOrFail($id);

        // Delete the student entry
        $student->delete();

        // Optionally, you can redirect the user after deleting the entry
        return redirect()->route('students')->with('success', 'Student deleted successfully.');
    }
}
