<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';

    protected $fillable = [
        'employee_id',
        'basic_salary',
        'allowance',
        'deductions',
        'net_salary'
    ];

    public $timestamps = false;


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    
}
