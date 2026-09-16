<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create({
        'name' => 'PT Mencari Cinta Sejati'
        'address' => 'Jl. Raya Cinta No. 123, Jakarta'
        'email' => 'info@mencaricintasejati.com'
        'phone_number' => '1234567890'
    });
    }
}
