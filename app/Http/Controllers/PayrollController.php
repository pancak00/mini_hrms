<?php

namespace App\Http\Controllers;

use\App\Models\Payroll;
use\App\Models\Salary;
use Illuminate\Http\Request;

class PayrollController extends Controller
{

    public function index()
    {
        $payrolls = Payroll::with(['employee', 'salary'])->get();
        return view('payrolls.index', compact('payrolls'));
    }

    public function create()
    {
        $salaries = Salary::with('employee')->get();
        return view('payrolls.create', compact('salaries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees_id',
            'salary_id' => 'required|exists:salaries,id',
            'pay_date' => 'required|date',
            'status'=> 'required|string'
        ]);

        Payroll::create($request->all());
        
        return redirect()->route('payroll.index')
                        ->with('success', 'Payroll created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payroll $payroll)
    {
        return view('payroll.edit', compact('payroll'));
    }

    public function update(Request $request, Payroll $payroll)
    {
        $request->validate([
            'pay_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $payroll->update($request->all());

        return redirect()->route('payroll.index')
                        ->with('success', 'Payroll record update successfully.');
    }

    public function destroy(Payroll $payroll)
    {
        $payroll->delete();

        return redirect()->route('payroll.index')
                        ->with('success', 'Payroll record deleted successfully.');
    }
}
