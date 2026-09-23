<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([
            'name' => 'PT Maju Bersama',
            'address' => 'Jl. Sudirman No. 10, Pekanbaru',
            'email' => 'info@majubersama.com',
            'phone_number' => '081234567801',
            'logo' => null,
        ]);

        Company::create([
            'name' => 'PT Teknologi Nusantara',
            'address' => 'Jl. Tuanku Tambusai No. 25, Pekanbaru',
            'email' => 'info@teknusantara.com',
            'phone_number' => '081234567802',
            'logo' => null,
        ]);

        Company::create([
            'name' => 'PT Sejahtera Abadi',
            'address' => 'Jl. Arifin Ahmad No. 18, Pekanbaru',
            'email' => 'info@sejahteraabadi.com',
            'phone_number' => '081234567803',
            'logo' => null,
        ]);

        Company::create([
            'name' => 'PT Kreatif Indonesia',
            'address' => 'Jl. HR Soebrantas No. 30, Pekanbaru',
            'email' => 'info@kreatifindonesia.com',
            'phone_number' => '081234567804',
            'logo' => null,
        ]);

        Company::create([
            'name' => 'PT Sentosa Mandiri',
            'address' => 'Jl. Hang Tuah No. 15, Pekanbaru',
            'email' => 'info@sentosamandiri.com',
            'phone_number' => '081234567805',
            'logo' => null,
        ]);
    }
}