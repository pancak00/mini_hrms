@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Salaries</h1>
    <a href="{{ route('salaries.create') }}" class="btn btn-primary mb=3">Add Salary</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Basic Salary</th>
                <th>Allowance</th>
                <th>Deductions</th>
                <th>Net Salary</th>
                <th>Actions</th>
</tr>
        </thead>
        <tbody>
            @foreach($salaries as $salary)
            <tr>
                <td>{{ $salary->employee->full_name }}</td>
                <td>{{ $salary->basic_salary }}</td>
                <td>{{ $salary->allowance }}</td>
                <td>{{ $salary->deductions }}</td>
                <td>{{ $salary->net_salary }}</td>
                <td>
                    <a href="{{ route('salaries.edit', $salary->id) }} " class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('salaries.destroy', $salaries->id) }} " method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection