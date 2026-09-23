<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('recruitments', function (Blueprint $table) {

            // Personal Information
            $table->string('nik')->nullable()->after('candidate_name');
            $table->string('place_of_birth')->nullable()->after('nik');
            $table->date('date_of_birth')->nullable()->after('place_of_birth');
            $table->enum('gender', [
                'male',
                'female',
            ])->nullable()->after('date_of_birth');

            $table->enum('religion', [
                'islam',
                'katolik',
                'protestan',
                'hindu',
                'budha',
                'konghucu',
            ])->nullable()->after('gender');

            $table->enum('marital_status', [
                'single',
                'married',
                'divorced',
            ])->nullable()->after('religion');

            $table->text('address')->nullable()->after('marital_status');
            $table->string('city')->nullable()->after('address');
            $table->string('province')->nullable()->after('city');

            // Application Information
            $table->string('application_source')->nullable()->after('application_date');
            $table->decimal('expected_salary', 15, 2)->nullable()->after('application_source');
            $table->date('available_start_date')->nullable()->after('expected_salary');

            // Education
            $table->enum('last_education', [
                'high_school',
                'diploma',
                'bachelor',
                'master',
                'doctorate',
            ])->nullable()->after('available_start_date');

            $table->string('institution')->nullable()->after('last_education');
            $table->string('major')->nullable()->after('institution');
            $table->year('graduation_year')->nullable()->after('major');
            $table->decimal('gpa', 3, 2)->nullable()->after('graduation_year');

            // Work Experience
            $table->string('previous_company')->nullable()->after('gpa');
            $table->string('previous_position')->nullable()->after('previous_company');
            $table->string('employment_duration')->nullable()->after('previous_position');
            $table->text('reason_for_leaving')->nullable()->after('employment_duration');
            $table->text('job_description')->nullable()->after('reason_for_leaving');

            // Skills
            $table->text('skills')->nullable()->after('job_description');
            $table->text('languages')->nullable()->after('skills');
            $table->text('certifications')->nullable()->after('languages');

            // Documents
            $table->string('cv')->nullable()->after('certifications');
            $table->string('identity_card')->nullable()->after('cv');
            $table->string('diploma')->nullable()->after('identity_card');
            $table->string('transcript')->nullable()->after('diploma');
            $table->string('certificate')->nullable()->after('transcript');
            $table->string('cover_letter')->nullable()->after('certificate');

            // Additional Information
            $table->boolean('willing_to_relocate')->default(false)->after('cover_letter');
            $table->boolean('willing_to_work_overtime')->default(false)->after('willing_to_relocate');

        });
    }

    public function down(): void
    {
        Schema::table('recruitments', function (Blueprint $table) {

            $table->dropColumn([
                'nik',
                'place_of_birth',
                'date_of_birth',
                'gender',
                'religion',
                'marital_status',
                'address',
                'city',
                'province',
                'application_source',
                'expected_salary',
                'available_start_date',
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
            ]);

        });
    }
};