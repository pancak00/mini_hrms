@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Details</h1>

    <div class="card">
        <div class="card-body">
            <h4>{{ $employee->full_name }}</h4>
            <p><strong>Email:</strong> {{ $employee->email }}</p>
            <p><strong>Position:</strong> {{ $employee->position }}</p>
        </div>
    </div>

    <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
