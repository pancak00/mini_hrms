<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $table = 'payroll';

    protected $fillable = [
        'employee_id',
        'payroll_date',
        'basic_salary',
        'allowance',
        'deductions',
        'net_salary'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    
    public function salary()
    {
        return $this->belongsTo(Salary::class, 'salary_id');
    }

}
