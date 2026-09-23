<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create([
            'name' => 'Software Engineer',
            'allowance' => 5000000,
            'description' => 'Develops and maintains software applications',
        ]);
    }
}
    