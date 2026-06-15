<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);
Route::resource('payroll', PayrollController::class);
Route::resource('salaries', SalaryController::class);
Route::resource('attendance', AttendanceController::class);
