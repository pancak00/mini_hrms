@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Assign Salary</h1>

<form action="{{ route('salaries.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="employee_id" class="form-label">Employee</label>
    <select name="employee_id" class="form-control">
        @foreach($employees as $employee)
        <option value="{{ $employee->id}}">{{$employee->full_name}}</option>
        @endforeach
</select>
</div>

    <div class="mb-3">
        <label for="basic_salary" class="form-label">Basic Salary</label>
    <input type="number" name="basic_salary" class="form-control" value="{{old('basic_salary')}}" required>
    </div>

    <div class="mb-3">
        <label for="allowance" class="form-label">Allowance</label>
    <input type="number" name="allowance" class="form-control" value="{{old('allowance') }}">
    </div>

    <div class="mb-3">
        <label for="deductions" class="form-label">Deductions</label>
    <input type="number" name="deductions" class="form-control" value="{{old('deductions') }}">
    </div>

        <button type="submit">Save</button>
    </form>
