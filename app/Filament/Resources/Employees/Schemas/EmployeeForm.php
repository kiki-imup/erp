<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // =========================
                // EMPLOYEE PROFILE
                // =========================
                Section::make('Employee Profile')
                    ->description('Basic information about the employee')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Profile Picture')
                            ->image()
                            ->disk('public')
                            ->directory('employees')
                            ->visibility('public')
                            ->imagePreviewHeight('150')
                            ->openable()
                            ->downloadable(),

                        TextInput::make('user_id')
                            ->label('User ID')
                            ->placeholder('Enter user ID')
                            ->required()
                            ->numeric(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                // =========================
                // PERSONAL INFORMATION
                // =========================
                Section::make('Personal Information')
                    ->description('Personal details of the employee')
                    ->schema([
                        TextInput::make('address')
                            ->label('Address')
                            ->placeholder('Enter employee address')
                            ->columnSpanFull(),

                        TextInput::make('pob')
                            ->label('Place of Birth')
                            ->placeholder('Enter place of birth'),

                        DatePicker::make('dob')
                            ->label('Date of Birth'),

                        Select::make('gender')
                            ->label('Gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                            ])
                            ->placeholder('Select gender')
                            ->required(),

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
                            ->placeholder('Select religion')
                            ->required(),

                        TextInput::make('phone_number')
                            ->label('Phone Number')
                            ->placeholder('Enter phone number')
                            ->tel(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                // =========================
                // EMPLOYMENT INFORMATION
                // =========================
                Section::make('Employment Information')
                    ->description('Department, position, salary, and employment status')
                    ->schema([
                        TextInput::make('department_id')
                            ->label('Department ID')
                            ->placeholder('Enter department ID')
                            ->required()
                            ->numeric(),

                        TextInput::make('position_id')
                            ->label('Position ID')
                            ->placeholder('Enter position ID')
                            ->required()
                            ->numeric(),

                        TextInput::make('salary')
                            ->label('Salary')
                            ->placeholder('Enter salary')
                            ->required()
                            ->numeric()
                            ->default(0),

                        Select::make('status')
                            ->label('Employment Status')
                            ->options([
                                'applicant' => 'Applicant',
                                'active' => 'Active',
                            ])
                            ->placeholder('Select status')
                            ->required()
                            ->default('active'),

                        DatePicker::make('start_date')
                            ->label('Start Date'),

                        DatePicker::make('end_date')
                            ->label('End Date'),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}