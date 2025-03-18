<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use Illuminate\Http\JsonResponse;

class TasksController extends Controller
{
    // function menampilkan semua data tasks
    public function index()
    {
        $tasks = Tasks::with('employee')->get();

        return response()->json($tasks->map(function ($task) {
            return [
                'id' => $task->id,
                'employee_name' => $task->employee->name, // Mengambil nama employee dari table employees berdasarkan relasi
                'task_name' => $task->task_name,
                'due_date' => $task->due_date,
            ];
        }), 200);
    }
    // function menampilkan semua data tasks end

    // function tambah tugas baru
    public function store(Request $request): JsonResponse
    {
        // Validasi input
        $request->validate([
            'employees_id' => 'required|exists:employees,id',
            'task_name' => 'required|string|max:255',
            'due_date' => 'required|date',
        ]);

        // Buat tugas baru
        $task = Tasks::create([
            'employees_id' => $request->employees_id,
            'task_name' => $request->task_name,
            'due_date' => $request->due_date,
        ]);

        // tampilkan response
        return response()->json([
            'message' => 'Task created successfully',
            'task' => $task
        ], 201);
    }
    // function tambah tugas baru end
}

