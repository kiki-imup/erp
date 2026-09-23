<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        Department::create([
            'name' => 'Human Resources',
            'description' => 'Manage recruitment, employees, attendance, and employee administration.',
            'address' => 'Jl. Sudirman No. 10, Pekanbaru',
            'email' => 'hr@company.com',
            'phone' => '081234567801',
        ]);

        Department::create([
            'name' => 'Information Technology',
            'description' => 'Manage company systems, software, hardware, and technology.',
            'address' => 'Jl. Sudirman No. 12, Pekanbaru',
            'email' => 'it@company.com',
            'phone' => '081234567802',
        ]);

        Department::create([
            'name' => 'Finance',
            'description' => 'Manage company finances, transactions, budgets, and financial reports.',
            'address' => 'Jl. Sudirman No. 14, Pekanbaru',
            'email' => 'finance@company.com',
            'phone' => '081234567803',
        ]);

        Department::create([
            'name' => 'Marketing',
            'description' => 'Manage marketing activities, promotions, and company campaigns.',
            'address' => 'Jl. Sudirman No. 16, Pekanbaru',
            'email' => 'marketing@company.com',
            'phone' => '081234567804',
        ]);

        Department::create([
            'name' => 'Administration',
            'description' => 'Manage documents, records, data, and administrative activities.',
            'address' => 'Jl. Sudirman No. 18, Pekanbaru',
            'email' => 'admin@company.com',
            'phone' => '081234567805',
        ]);

        Department::create([
            'name' => 'Operations',
            'description' => 'Manage daily operational activities and business processes.',
            'address' => 'Jl. Sudirman No. 20, Pekanbaru',
            'email' => 'operations@company.com',
            'phone' => '081234567806',
        ]);
    }
}