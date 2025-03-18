<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Employees;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'employees_id',
        'task_name',
        'due_date',
    ];

    public $timestamps = false;

    // relasi table tasks dengan table employees
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employees::class, 'employees_id');
    }
    // relasi table tasks dengan table employees end
}
