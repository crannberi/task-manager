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
                'creation_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 1, // Assume an existing department ID
            ],
            [
                'name' => 'Marketing Campaign',
                'status' => 'pending',
                'creation_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 2, // Assume an existing department ID
            ],
            [
                'name' => 'New Product Launch',
                'status' => 'completed',
                'creation_date' => now()->subMonths(2),
                'created_at' => now()->subMonths(2),
                'updated_at' => now()->subMonth(), // Recently completed
                'department_id' => 3, // Assume an existing department ID
            ],
            [
                'name' => 'Employee Training Program',
                'status' => 'canceled',
                'creation_date' => now()->subWeeks(3),
                'created_at' => now()->subWeeks(3),
                'updated_at' => now()->subDays(10), // Canceled 10 days ago
                'department_id' => 4, // Assume an existing department ID
            ],
        ]);
    }
}
