@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Assign Salary</h2>

    <form action="{{ route('salaries.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="employee_id" class="form-label">Employee</label>
            <select name="employee_id" id="employee_id" class="form-select">
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->full_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="basic_salary" class="form-label">Basic Salary</label>
            <input type="text" name="basic_salary" id="basic_salary" class="form-control">
        </div>

        <div class="mb-3">
            <label for="allowance" class="form-label">Allowance</label>
            <input type="text" name="allowance" id="allowance" class="form-control">
        </div>

        <div class="mb-3">
            <label for="deductions" class="form-label">Deductions</label>
            <input type="text" name="deductions" id="deductions" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
