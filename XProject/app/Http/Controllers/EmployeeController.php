<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::latest()->paginate(20);

        return view('employee.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 20);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address' =>'required',
            'phone_number' => 'required|numeric|min:10',
        ]);

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->phone_number = $request->phone_number;

        $employee->save();

        return redirect()->route('employees.index')->with('success','Employee Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
