<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreUpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public readonly Student $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->student->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreUpdateRequest $request)
    {

        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->academic_registration_number = $request->academic_registration_number;
        $student->document_number = $request->document_number;

        $student->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->student->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentStoreUpdateRequest $request, string $id)
    {
        $student = $this->student->findOrFail($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->academic_registration_number = $request->academic_registration_number;
        $student->document_number = $request->document_number;

        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->student->findOrFail($id)->delete();
    }
}
