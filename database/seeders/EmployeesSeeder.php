<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees;

class EmployeesSeeder extends Seeder
{
    public function run(): void
    {
        Employees::insert([
            ['name' => 'Nafsirudin', 'position' => 'Developer'],
            ['name' => 'Putri', 'position' => 'Designer'],
        ]);
    }
}
