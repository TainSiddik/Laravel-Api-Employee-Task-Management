<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    // function menampilkan semua data employees
    public function index()
    {
        $employees = Employees::all();
        return response()->json($employees, 200);
    }
    // function menampilkan semua data employees end

}
