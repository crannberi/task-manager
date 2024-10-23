<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('projects')->insert([
            [
                'name' => 'Website Redesign',
                'status' => 'in_progress',
                'deadline' => now()->addDays(45),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 2, 
            ],
            [
                'name' => 'Marketing Campaign',
                'status' => 'pending',
                'deadline' => now()->addDays(45),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 4, 
            ],
            [
                'name' => 'Remodeling Website',
                'status' => 'completed',
                'deadline' => now()->addDays(24),
                'created_at' => now()->subMonths(2),
                'updated_at' => now()->subMonth(), 
                'department_id' => 2, 
            ],
            [
                'name' => 'Employee Training Program',
                'status' => 'canceled',
                'deadline' => now()->addDays(21),
                'created_at' => now()->subWeeks(3),
                'updated_at' => now()->subDays(10), 
                'department_id' => 1, 
            ],
            //Additional Projects
            [
                'name' => 'Customer Support Enhancement',
                'status' => 'in_progress',
                'deadline' => now()->addDays(50),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 1,
            ],
            [
                'name' => 'Mobile App Launch',
                'status' => 'pending',
                'deadline' => now()->addDays(87),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 2,
            ],
            [
                'name' => 'Q4 Financial Planning',
                'status' => 'completed',
                'deadline' => now()->addDays(45),
                'created_at' => now()->subMonths(1),
                'updated_at' => now()->subWeeks(2),
                'department_id' => 5,
            ],
            [
                'name' => 'Company Rebranding',
                'status' => 'in_progress',
                'deadline' => now()->addDays(78),
                'created_at' => now()->subWeeks(2),
                'updated_at' => now()->subDays(5),
                'department_id' => 5,
            ],
            [
                'name' => 'New HR Software Integration',
                'status' => 'pending',
                'deadline' => now()->addDays(40),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 2,
            ],
            [
                'name' => 'Security System Upgrade',
                'status' => 'in_progress',
                'deadline' => now()->addDays(50),
                'created_at' => now()->subDays(4),
                'updated_at' => now(),
                'department_id' => 2,
            ],
            [
                'name' => 'Sales Growth Strategy',
                'status' => 'completed',
                'deadline' => now()->addDays(99),
                'created_at' => now()->subMonths(3),
                'updated_at' => now()->subMonths(2),
                'department_id' => 4,
            ],
            [
                'name' => 'Data Backup & Recovery Plan',
                'status' => 'in_progress',
                'deadline' => now()->addDays(50),
                'created_at' => now()->subDays(10),
                'updated_at' => now(),
                'department_id' => 2,
            ],
        ]);
    }
}
