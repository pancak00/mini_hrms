@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>

    <!-- Validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit form -->
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $employee->full_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" class="form-control" value="{{ old('position', $employee->position) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
