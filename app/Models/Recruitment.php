<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'candidate_name',
    'image',
    'nik',
    'email',
    'phone_number',
    'place_of_birth',
    'date_of_birth',
    'gender',
    'religion',
    'marital_status',
    'address',
    'city',
    'province',

    'position_id',
    'application_date',
    'application_source',
    'expected_salary',
    'available_start_date',
    'status',

    'last_education',
    'institution',
    'major',
    'graduation_year',
    'gpa',

    'previous_company',
    'previous_position',
    'employment_duration',
    'reason_for_leaving',
    'job_description',

    'skills',
    'languages',
    'certifications',

    'cv',
    'identity_card',
    'diploma',
    'transcript',
    'certificate',
    'cover_letter',

    'willing_to_relocate',
    'willing_to_work_overtime',
    'notes',
])]
class Recruitment extends Model
{
    protected $casts = [
        'date_of_birth' => 'date',
        'application_date' => 'date',
        'available_start_date' => 'date',
        'expected_salary' => 'decimal:2',
        'gpa' => 'decimal:2',
        'willing_to_relocate' => 'boolean',
        'willing_to_work_overtime' => 'boolean',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}