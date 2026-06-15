<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = Salary::with('employee')->get();
        return view('salaries.index', compact('salaries'));
    }

    public function create()
    {
        return view('salaries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'basic_salary' => 'required|numeric',
            'allowance' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
        ]);

        Salary::create($request->all());

        return redirect()->route('salaries.index')
                         ->with('success', 'Salary record created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salary $salary)
    {
        return view('salaries.edit', compact('salary'));
    }

    public function update(Request $request, Salary $salary)
    {
        $request->validate([
            'basic_salary' => 'required|numeric',
            'allowance' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
        ]);

        $salary->update($request->all());

        return redirect()->route('salaries.index')
                         ->with('success', 'Salary record updated successfully.');
    }

    public function destroy(Salary $salary)
    {
        $salary->delete();

        return redirect()->route('salaries.index')
                         ->with('success', 'Salary record deleted successfully.');
    }
}
