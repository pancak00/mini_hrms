@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Salary</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
</div>
@endif


<form action=" {{ route('salaries.update', $salary->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="basic_salary" class="form-label">Basic Salary</label>
        <input type="number" name="basic_salary" class="form-control" value="{{ old('basic_salary', $salary->basic_salary) }}" required>
</div>

    <div class="mb-3">
        <label for="allowance" class="form-label">Allowance</label>
        <input type="number" name="allowance" class="form-control" value="{{ old('allowance', $salary->allowance) }}">
    </div>

    <div class="mb-3">
        <label for="deductions" class="form-label">Deductions</label>
        <input type="number" name="deductions" class="form-control" value="{{ old('deductions', $salary->deductions) }}">
    </div>

    <div class="mb-3">
        <label for="net_salary" class="form-label">Net Salary</label>
        <input type="number" name="net_salary" class="form-control" value="{{ old('net_salary', $salary->net_salary) }}" required>
    </div>

    <button type="submit" class="btn btn-success">Update Salary</button>
    <a href="{{ route('salaries.index') }}" class="btn btn-secondary">Cancel</a>

    

</form>






