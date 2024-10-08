<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        // DB::table('departments')->insert([
        // 'name' => Str::random(10).'department',
        // 'description' => Str::random(10),
        // ]);

        DB::table('departments')->insert([
            [
                'name' => 'Human Resources',
                'description' => 'Responsible for recruitment, employee relations, and compliance.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Engineering',
                'description' => 'Handles product development, technical innovation, and software engineering.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing',
                'description' => 'Focuses on market research, advertising, and product promotion.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sales',
                'description' => 'Responsible for generating revenue by selling products or services.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Finance',
                'description' => 'Manages the financial planning, analysis, and risk management.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Department::factory(20)->create();
    }
}
