<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use App\Models\Employee;

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
        $employees = Employee::all();
        return view('salaries.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'basic_salary' => 'required|numeric',
            'allowance' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'net_salary' => 'nullable|numeric',
        ]);

        $net_salary = $request->basic_salary + ($request->allowance ?? 0) - ($request->deductions ?? 0);

        Salary::create([
            'employee_id' => $request->employee_id,
            'basic_salary' => $request->basic_salary,
            'allowance' => $request->allowance ?? 0,
            'deductions' => $request->deductions ?? 0,
            'net_salary' => $net_salary,
        ]);

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
    public function edit($id)
    {
        $salary = Salary::findOrFail($id);
        $employees = Employee::all();
        
        return view('salaries.edit', compact('salary', 'employees'));
    }

    public function update(Request $request, Salary $salary)
{
    $request->validate([
        'employee_id' => 'required|exists:employees,id',
        'basic_salary' => 'required|numeric',
        'allowance' => 'nullable|numeric',
        'deductions' => 'nullable|numeric',
    ]);

    $netSalary = $request->basic_salary + ($request->allowance ?? 0) - ($request->deductions ?? 0);

    $salary->update([
        'employee_id' => $request->employee_id,
        'basic_salary' => $request->basic_salary,
        'allowance' => $request->allowance ?? 0,
        'deductions' => $request->deductions ?? 0,
        'net_salary' => $netSalary,
    ]);

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
