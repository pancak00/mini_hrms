<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    
    protected $fillable = [
        'employee_id',
        'full_name',
        'email',
        'contact_number',
        'position',
        'department',
        'date_hired',
        'status',
    ];
}
