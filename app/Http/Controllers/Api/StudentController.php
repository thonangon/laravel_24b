<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $student = Student::list();
      return $student;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::store($request);
        return response()->json([
           'status' => true,
           'message' => 'Student created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $student= student::find($id);	
        return response()->json([
            'status' => true,
            'data'=>$student
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Student::store($request, $id);
        return response()->json([
           'status' => true,
           'message' => 'Student updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Student::find($id);
        $student->delete();
        return response()->json([
           'status' => true,
           'message' => 'Student deleted successfully',
        ]);
    }
}
