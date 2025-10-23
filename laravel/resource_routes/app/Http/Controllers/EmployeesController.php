<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function index()
    {
        $employees = Employees::all();
        return view('employees.index', compact('employees'));
    }
    public function create()
    {
        return view('employees.create');
    }
    public function store(Request $request)
    {
        Employees::create($request->all());
        return redirect()->route('employees.index');
    }
    public function show($id)
    {
        $employee = Employees::findOrFail($id);
        return view('employees.show', compact('employee'));
    }
    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        $employee = Employees::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employees.index');
    }
    public function destroy($id)
    {
        $employee = Employees::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
