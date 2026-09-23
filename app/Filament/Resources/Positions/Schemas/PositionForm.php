<?php

namespace App\Filament\Resources\Positions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Position Information')
                    ->description('Please provide the position information below.')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label('Position Name')
                            ->placeholder('Enter position name')
                            ->required(),

                        TextInput::make('allowance')
                            ->label('Allowance')
                            ->placeholder('Enter allowance amount')
                            ->numeric()
                            ->default(0),

                        TextInput::make('description')
                            ->label('Description')
                            ->placeholder('Enter position description')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}