<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            [
                'name' => 'Rizky Maulana',
                'email' => 'rizky.maulana@example.com',
                'department_id' => 1,
                'position_id' => 1,
                'address' => 'Jl. Melati No. 10',
                'pob' => 'Pekanbaru',
                'dob' => '2001-05-12',
                'gender' => 'male',
                'religion' => 'islam',
                'phone_number' => '081234567801',
                'salary' => 5000000,
                'start_date' => '2025-01-10',
                'end_date' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Aulia Safitri',
                'email' => 'aulia.safitri@example.com',
                'department_id' => 2,
                'position_id' => 2,
                'address' => 'Jl. Mawar No. 15',
                'pob' => 'Dumai',
                'dob' => '2002-08-20',
                'gender' => 'female',
                'religion' => 'islam',
                'phone_number' => '081234567802',
                'salary' => 6500000,
                'start_date' => '2025-02-15',
                'end_date' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Fajar Ramadhan',
                'email' => 'fajar.ramadhan@example.com',
                'department_id' => 3,
                'position_id' => 3,
                'address' => 'Jl. Kenanga No. 20',
                'pob' => 'Padang',
                'dob' => '2000-03-18',
                'gender' => 'male',
                'religion' => 'islam',
                'phone_number' => '081234567803',
                'salary' => 5500000,
                'start_date' => '2025-03-01',
                'end_date' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Nabila Putri',
                'email' => 'nabila.putri@example.com',
                'department_id' => 4,
                'position_id' => 4,
                'address' => 'Jl. Anggrek No. 25',
                'pob' => 'Jambi',
                'dob' => '2002-11-05',
                'gender' => 'female',
                'religion' => 'islam',
                'phone_number' => '081234567804',
                'salary' => 6000000,
                'start_date' => '2025-03-20',
                'end_date' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Yoga Pratama',
                'email' => 'yoga.pratama@example.com',
                'department_id' => 5,
                'position_id' => 5,
                'address' => 'Jl. Seroja No. 30',
                'pob' => 'Medan',
                'dob' => '1999-07-25',
                'gender' => 'male',
                'religion' => 'protestan',
                'phone_number' => '081234567805',
                'salary' => 4800000,
                'start_date' => '2025-04-05',
                'end_date' => null,
                'status' => 'active',
            ],
        ];

        foreach ($employees as $employee) {
            $user = User::create([
                'name' => $employee['name'],
                'email' => $employee['email'],
                'password' => bcrypt('password'),
            ]);

            Employee::create([
                'user_id' => $user->id,
                'department_id' => $employee['department_id'],
                'position_id' => $employee['position_id'],
                'address' => $employee['address'],
                'pob' => $employee['pob'],
                'dob' => $employee['dob'],
                'gender' => $employee['gender'],
                'religion' => $employee['religion'],
                'phone_number' => $employee['phone_number'],
                'salary' => $employee['salary'],
                'start_date' => $employee['start_date'],
                'end_date' => $employee['end_date'],
                'status' => $employee['status'],
                'image' => null,
            ]);
        }
    }
}