<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Models\Salary;
use App\Models\Attendance;

//for employees:
Route::get('/employees', fn() => Employee::all());

//creating new employee
Route::post('/employees', function (Request $request){
    return Employee::create($request->all());
});

Route::put('/employees/{id', function (Request $request, $id){
    $employee = Employee::findOrFail($id);
    $employee->update($request->all());
    return $employee;
});

Route::delete('/employees/{id}', function ($id){
    Employee::destroy($id)->delete();
    return response()->json(['message' => 'Employee deleted successfully']);
});

//for salaries:
Route::get('/salaries', fn() => Salary::all());





//for attendance:
Route::get('/attendance', fn() => Attendance::all());






?>