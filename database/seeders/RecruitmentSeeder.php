<?php

namespace Database\Seeders;

use App\Models\Recruitment;
use Illuminate\Database\Seeder;

class RecruitmentSeeder extends Seeder
{
    public function run(): void
    {
        Recruitment::create([
            'candidate_name' => 'Amanda Putri',
            'image' => null,
            'nik' => '1471010101010001',
            'email' => 'amanda.putri@example.com',
            'phone_number' => '081234567890',
            'place_of_birth' => 'Pekanbaru',
            'date_of_birth' => '2002-03-15',
            'gender' => 'female',
            'religion' => 'islam',
            'marital_status' => 'single',
            'address' => 'Jl. Melati No. 12',
            'city' => 'Pekanbaru',
            'province' => 'Riau',

            'position_id' => 1,
            'application_date' => '2026-09-01',
            'application_source' => 'company_website',
            'expected_salary' => 5000000,
            'available_start_date' => '2026-10-01',
            'status' => 'applied',

            'last_education' => 'bachelor',
            'institution' => 'Universitas Riau',
            'major' => 'Management',
            'graduation_year' => 2025,
            'gpa' => 3.65,

            'previous_company' => 'PT Maju Bersama',
            'previous_position' => 'HR Staff',
            'employment_duration' => '1 year',
            'reason_for_leaving' => 'Looking for a new career opportunity.',
            'job_description' => 'Handled employee administration and recruitment activities.',

            'skills' => 'Microsoft Office, Recruitment, Communication',
            'languages' => 'Indonesian, English',
            'certifications' => 'HR Management Certificate',

            'cv' => null,
            'identity_card' => null,
            'diploma' => null,
            'transcript' => null,
            'certificate' => null,
            'cover_letter' => null,

            'willing_to_relocate' => false,
            'willing_to_work_overtime' => true,
            'notes' => 'Good communication skills.',
        ]);

        Recruitment::create([
            'candidate_name' => 'Dimas Pratama',
            'image' => null,
            'nik' => '1471020202020002',
            'email' => 'dimas.pratama@example.com',
            'phone_number' => '082345678901',
            'place_of_birth' => 'Dumai',
            'date_of_birth' => '2001-07-20',
            'gender' => 'male',
            'religion' => 'islam',
            'marital_status' => 'single',
            'address' => 'Jl. Mawar No. 25',
            'city' => 'Pekanbaru',
            'province' => 'Riau',

            'position_id' => 2,
            'application_date' => '2026-09-05',
            'application_source' => 'job_portal',
            'expected_salary' => 6500000,
            'available_start_date' => '2026-10-15',
            'status' => 'interview',

            'last_education' => 'bachelor',
            'institution' => 'Universitas Islam Riau',
            'major' => 'Informatics',
            'graduation_year' => 2024,
            'gpa' => 3.72,

            'previous_company' => 'PT Teknologi Nusantara',
            'previous_position' => 'Junior Developer',
            'employment_duration' => '2 years',
            'reason_for_leaving' => 'Seeking career growth.',
            'job_description' => 'Developed and maintained web applications.',

            'skills' => 'PHP, Laravel, MySQL, JavaScript',
            'languages' => 'Indonesian, English',
            'certifications' => 'Laravel Certificate',

            'cv' => null,
            'identity_card' => null,
            'diploma' => null,
            'transcript' => null,
            'certificate' => null,
            'cover_letter' => null,

            'willing_to_relocate' => true,
            'willing_to_work_overtime' => true,
            'notes' => 'Has previous experience in web development.',
        ]);

        Recruitment::create([
            'candidate_name' => 'Siti Rahma',
            'image' => null,
            'nik' => '1471030303030003',
            'email' => 'siti.rahma@example.com',
            'phone_number' => '083456789012',
            'place_of_birth' => 'Padang',
            'date_of_birth' => '2003-11-10',
            'gender' => 'female',
            'religion' => 'islam',
            'marital_status' => 'single',
            'address' => 'Jl. Kenanga No. 8',
            'city' => 'Pekanbaru',
            'province' => 'Riau',

            'position_id' => 3,
            'application_date' => '2026-09-08',
            'application_source' => 'social_media',
            'expected_salary' => 5500000,
            'available_start_date' => '2026-10-05',
            'status' => 'applied',

            'last_education' => 'bachelor',
            'institution' => 'Universitas Lancang Kuning',
            'major' => 'Accounting',
            'graduation_year' => 2025,
            'gpa' => 3.80,

            'previous_company' => 'CV Sejahtera',
            'previous_position' => 'Finance Staff',
            'employment_duration' => '1 year',
            'reason_for_leaving' => 'Seeking a better opportunity.',
            'job_description' => 'Prepared financial reports and handled daily transactions.',

            'skills' => 'Accounting, Excel, Financial Reporting',
            'languages' => 'Indonesian, English',
            'certifications' => 'Accounting Certificate',

            'cv' => null,
            'identity_card' => null,
            'diploma' => null,
            'transcript' => null,
            'certificate' => null,
            'cover_letter' => null,

            'willing_to_relocate' => false,
            'willing_to_work_overtime' => true,
            'notes' => 'Strong attention to detail.',
        ]);

        Recruitment::create([
            'candidate_name' => 'Andi Saputra',
            'image' => null,
            'nik' => '1471040404040004',
            'email' => 'andi.saputra@example.com',
            'phone_number' => '084567890123',
            'place_of_birth' => 'Medan',
            'date_of_birth' => '2000-05-05',
            'gender' => 'male',
            'religion' => 'protestan',
            'marital_status' => 'married',
            'address' => 'Jl. Anggrek No. 17',
            'city' => 'Pekanbaru',
            'province' => 'Riau',

            'position_id' => 4,
            'application_date' => '2026-09-10',
            'application_source' => 'employee_referral',
            'expected_salary' => 6000000,
            'available_start_date' => '2026-10-10',
            'status' => 'interview',

            'last_education' => 'bachelor',
            'institution' => 'Universitas Muhammadiyah Riau',
            'major' => 'Marketing',
            'graduation_year' => 2023,
            'gpa' => 3.55,

            'previous_company' => 'PT Kreatif Indonesia',
            'previous_position' => 'Marketing Staff',
            'employment_duration' => '3 years',
            'reason_for_leaving' => 'Looking for a new challenge.',
            'job_description' => 'Managed promotional campaigns and social media marketing.',

            'skills' => 'Digital Marketing, Social Media, Communication',
            'languages' => 'Indonesian, English',
            'certifications' => 'Digital Marketing Certificate',

            'cv' => null,
            'identity_card' => null,
            'diploma' => null,
            'transcript' => null,
            'certificate' => null,
            'cover_letter' => null,

            'willing_to_relocate' => true,
            'willing_to_work_overtime' => true,
            'notes' => 'Experienced in digital marketing.',
        ]);

        Recruitment::create([
            'candidate_name' => 'Nadia Permata',
            'image' => null,
            'nik' => '1471050505050005',
            'email' => 'nadia.permata@example.com',
            'phone_number' => '085678901234',
            'place_of_birth' => 'Jambi',
            'date_of_birth' => '2002-09-25',
            'gender' => 'female',
            'religion' => 'islam',
            'marital_status' => 'single',
            'address' => 'Jl. Seroja No. 30',
            'city' => 'Pekanbaru',
            'province' => 'Riau',

            'position_id' => 5,
            'application_date' => '2026-09-12',
            'application_source' => 'company_website',
            'expected_salary' => 4800000,
            'available_start_date' => '2026-10-01',
            'status' => 'accepted',

            'last_education' => 'diploma',
            'institution' => 'Politeknik Caltex Riau',
            'major' => 'Business Administration',
            'graduation_year' => 2024,
            'gpa' => 3.60,

            'previous_company' => 'PT Sentosa Abadi',
            'previous_position' => 'Administrative Staff',
            'employment_duration' => '2 years',
            'reason_for_leaving' => 'Career development.',
            'job_description' => 'Managed documents, data entry, and administrative reports.',

            'skills' => 'Microsoft Office, Data Entry, Administration',
            'languages' => 'Indonesian, English',
            'certifications' => 'Office Administration Certificate',

            'cv' => null,
            'identity_card' => null,
            'diploma' => null,
            'transcript' => null,
            'certificate' => null,
            'cover_letter' => null,

            'willing_to_relocate' => false,
            'willing_to_work_overtime' => false,
            'notes' => 'Candidate accepted for the administrative position.',
        ]);
    }
}