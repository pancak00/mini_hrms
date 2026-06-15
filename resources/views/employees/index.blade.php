@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employees</h1>

    <!-- Success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add Employee button -->
    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add Employee</a>

    <!-- Employee table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $employee)
                <tr>
                    <td>{{ $employee->full_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No employees found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
