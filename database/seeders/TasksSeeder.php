<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tasks;

class TasksSeeder extends Seeder
{
    public function run(): void
    {
        Tasks::insert([
            ['employees_id' => 1, 'task_name' => 'Mengerjakan API', 'due_date' => '2024-09-15'],
            ['employees_id' => 2, 'task_name' => 'Membuat desain UI halaman create', 'due_date' => '2024-09-20'],
            ['employees_id' => 1, 'task_name' => 'Slicing HTML', 'due_date' => '2024-08-02'],
            ['employees_id' => 2, 'task_name' => 'Membuat icon', 'due_date' => '2024-10-03'],
            ['employees_id' => 2, 'task_name' => 'Mengubah ukuran gambar', 'due_date' => '2024-10-03'],
        ]);
    }
}
