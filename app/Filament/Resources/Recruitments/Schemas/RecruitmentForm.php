<?php

namespace App\Filament\Resources\Recruitments\Schemas;

use App\Models\Position;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RecruitmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Candidate Information')
                    ->description('Basic information about the job candidate.')
                    ->schema([

                        FileUpload::make('image')
                            ->label('Profile Picture')
                            ->image()
                            ->disk('public')
                            ->directory('recruitments')
                            ->visibility('public')
                            ->imagePreviewHeight('150')
                            ->openable()
                            ->downloadable(),

                        TextInput::make('candidate_name')
                            ->label('Full Name')
                            ->placeholder('Enter candidate full name')
                            ->required(),

                        TextInput::make('nik')
                            ->label('NIK')
                            ->placeholder('Enter NIK')
                            ->numeric(),

                        TextInput::make('email')
                            ->label('Email')
                            ->placeholder('Enter email address')
                            ->email()
                            ->required(),

                        TextInput::make('phone_number')
                            ->label('Phone Number')
                            ->placeholder('Enter phone number')
                            ->tel()
                            ->required(),

                        TextInput::make('place_of_birth')
                            ->label('Place of Birth')
                            ->placeholder('Enter place of birth'),

                        DatePicker::make('date_of_birth')
                            ->label('Date of Birth')
                            ->native(false),

                        Select::make('gender')
                            ->label('Gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                            ])
                            ->placeholder('Select gender'),

                        Select::make('religion')
                            ->label('Religion')
                            ->options([
                                'islam' => 'Islam',
                                'katolik' => 'Catholic',
                                'protestan' => 'Protestant',
                                'hindu' => 'Hindu',
                                'budha' => 'Buddhist',
                                'konghucu' => 'Confucianism',
                            ])
                            ->placeholder('Select religion'),

                        Select::make('marital_status')
                            ->label('Marital Status')
                            ->options([
                                'single' => 'Single',
                                'married' => 'Married',
                                'divorced' => 'Divorced',
                            ])
                            ->placeholder('Select marital status'),

                        Textarea::make('address')
                            ->label('Address')
                            ->placeholder('Enter complete address')
                            ->rows(3)
                            ->columnSpanFull(),

                        TextInput::make('city')
                            ->label('City')
                            ->placeholder('Enter city'),

                        TextInput::make('province')
                            ->label('Province')
                            ->placeholder('Enter province'),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Application Information')
                    ->description('Information about the candidate job application.')
                    ->schema([

                        Select::make('position_id')
                            ->label('Position')
                            ->options(
                                Position::query()
                                    ->orderBy('name')
                                    ->pluck('name', 'id')
                            )
                            ->searchable()
                            ->preload()
                            ->placeholder('Select position')
                            ->required(),

                        DatePicker::make('application_date')
                            ->label('Application Date')
                            ->default(now())
                            ->native(false)
                            ->required(),

                        Select::make('application_source')
                            ->label('Application Source')
                            ->options([
                                'company_website' => 'Company Website',
                                'job_portal' => 'Job Portal',
                                'social_media' => 'Social Media',
                                'employee_referral' => 'Employee Referral',
                                'walk_in' => 'Walk In',
                                'other' => 'Other',
                            ])
                            ->placeholder('Select application source'),

                        TextInput::make('expected_salary')
                            ->label('Expected Salary')
                            ->placeholder('Enter expected salary')
                            ->numeric()
                            ->prefix('Rp'),

                        DatePicker::make('available_start_date')
                            ->label('Available Start Date')
                            ->native(false),

                        Select::make('status')
                            ->label('Application Status')
                            ->options([
                                'applied' => 'Applied',
                                'interview' => 'Interview',
                                'accepted' => 'Accepted',
                                'rejected' => 'Rejected',
                            ])
                            ->placeholder('Select application status')
                            ->default('applied')
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Education')
                    ->description('Candidate educational background.')
                    ->schema([

                        Select::make('last_education')
                            ->label('Last Education')
                            ->options([
                                'high_school' => 'High School',
                                'diploma' => 'Diploma',
                                'bachelor' => 'Bachelor Degree',
                                'master' => 'Master Degree',
                                'doctorate' => 'Doctorate',
                            ])
                            ->placeholder('Select last education'),

                        TextInput::make('institution')
                            ->label('School / University')
                            ->placeholder('Enter school or university name'),

                        TextInput::make('major')
                            ->label('Major')
                            ->placeholder('Enter major'),

                        TextInput::make('graduation_year')
                            ->label('Graduation Year')
                            ->placeholder('Enter graduation year')
                            ->numeric()
                            ->minValue(1900)
                            ->maxValue((int) date('Y')),

                        TextInput::make('gpa')
                            ->label('GPA')
                            ->placeholder('Example: 3.50')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(4),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Work Experience')
                    ->description('Previous work experience of the candidate.')
                    ->schema([

                        TextInput::make('previous_company')
                            ->label('Previous Company')
                            ->placeholder('Enter previous company'),

                        TextInput::make('previous_position')
                            ->label('Previous Position')
                            ->placeholder('Enter previous position'),

                        TextInput::make('employment_duration')
                            ->label('Employment Duration')
                            ->placeholder('Example: 2 years'),

                        Textarea::make('reason_for_leaving')
                            ->label('Reason for Leaving')
                            ->placeholder('Enter reason for leaving')
                            ->rows(3),

                        Textarea::make('job_description')
                            ->label('Job Description')
                            ->placeholder('Describe previous job responsibilities')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Skills & Certifications')
                    ->description('Candidate skills, languages, and certifications.')
                    ->schema([

                        Textarea::make('skills')
                            ->label('Skills')
                            ->placeholder('Example: Microsoft Office, Laravel, Photoshop')
                            ->rows(3),

                        Textarea::make('languages')
                            ->label('Languages')
                            ->placeholder('Example: Indonesian, English')
                            ->rows(3),

                        Textarea::make('certifications')
                            ->label('Certifications')
                            ->placeholder('Enter certificates or professional certifications')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Documents')
                    ->description('Upload candidate application documents.')
                    ->schema([

                        FileUpload::make('cv')
                            ->label('CV / Resume')
                            ->disk('public')
                            ->directory('recruitments/cv')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'application/pdf',
                                'application/msword',
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                            ])
                            ->maxSize(5120)
                            ->openable()
                            ->downloadable(),

                        FileUpload::make('identity_card')
                            ->label('Identity Card / KTP')
                            ->disk('public')
                            ->directory('recruitments/documents')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'application/pdf',
                                'image/jpeg',
                                'image/png',
                            ])
                            ->maxSize(5120)
                            ->openable()
                            ->downloadable(),

                        FileUpload::make('diploma')
                            ->label('Diploma / Ijazah')
                            ->disk('public')
                            ->directory('recruitments/documents')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'application/pdf',
                                'image/jpeg',
                                'image/png',
                            ])
                            ->maxSize(5120)
                            ->openable()
                            ->downloadable(),

                        FileUpload::make('transcript')
                            ->label('Transcript / Transkrip Nilai')
                            ->disk('public')
                            ->directory('recruitments/documents')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'application/pdf',
                                'image/jpeg',
                                'image/png',
                            ])
                            ->maxSize(5120)
                            ->openable()
                            ->downloadable(),

                        FileUpload::make('certificate')
                            ->label('Certificate')
                            ->disk('public')
                            ->directory('recruitments/documents')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'application/pdf',
                                'image/jpeg',
                                'image/png',
                            ])
                            ->maxSize(5120)
                            ->openable()
                            ->downloadable(),

                        FileUpload::make('cover_letter')
                            ->label('Cover Letter / Surat Lamaran')
                            ->disk('public')
                            ->directory('recruitments/documents')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'application/pdf',
                                'application/msword',
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                            ])
                            ->maxSize(5120)
                            ->openable()
                            ->downloadable(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Additional Information')
                    ->description('Additional information about the candidate.')
                    ->schema([

                        Toggle::make('willing_to_relocate')
                            ->label('Willing to Relocate')
                            ->default(false),

                        Toggle::make('willing_to_work_overtime')
                            ->label('Willing to Work Overtime')
                            ->default(false),

                        Textarea::make('notes')
                            ->label('Notes')
                            ->placeholder('Enter additional notes')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}