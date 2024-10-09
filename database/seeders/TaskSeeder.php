<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('tasks')->insert([
            [
                'title' => 'Create Marketing Plan',
                'status' => 'in_progress',
                'creation_date' => now(),
                'completion_date' => null,
                'deadline' => Carbon::now()->addDays(5), // Deadline 5 days from now
                'department_id' => 1, // Assuming department_id 1 exists
                'assigned_to' => 2, // Assuming user with ID 2 exists
                'created_by_id' => 1, // Assuming user with ID 1 exists
                'completed_by_id' => null, // Not yet completed
                'project_id' => 1, // Assuming project with ID 1 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Design Landing Page',
                'status' => 'pending',
                'creation_date' => now(),
                'completion_date' => null,
                'deadline' => Carbon::now()->addWeeks(1), // Deadline in 1 week
                'department_id' => 2, // Assuming department_id 2 exists
                'assigned_to' => 3, // Assuming user with ID 3 exists
                'created_by_id' => 2, // Assuming user with ID 2 exists
                'completed_by_id' => null,
                'project_id' => 2, // Assuming project with ID 2 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Develop Backend API',
                'status' => 'completed',
                'creation_date' => now()->subWeeks(2),
                'completion_date' => now()->subWeek(), // Completed 1 week ago
                'deadline' => Carbon::now()->subWeeks(1), // Deadline was 1 week ago
                'department_id' => 3, // Assuming department_id 3 exists
                'assigned_to' => 4, // Assuming user with ID 4 exists
                'created_by_id' => 3, // Assuming user with ID 3 exists
                'completed_by_id' => 4, // Completed by user ID 4
                'project_id' => 1, // Assuming project with ID 1 exists
                'created_at' => now()->subWeeks(2),
                'updated_at' => now()->subWeek(),
            ],
            [
                'title' => 'Client Feedback Meeting',
                'status' => 'canceled',
                'creation_date' => now()->subWeeks(3),
                'completion_date' => null,
                'deadline' => Carbon::now()->addDays(7), // Originally planned for next week
                'department_id' => 1, // Assuming department_id 1 exists
                'assigned_to' => null, // No one assigned
                'created_by_id' => 1, // Assuming user with ID 1 exists
                'completed_by_id' => null, // Task canceled, no one completed it
                'project_id' => 3, // Assuming project with ID 3 exists
                'created_at' => now()->subWeeks(3),
                'updated_at' => now(),
            ],

            //14 additional tasks 
            [
                'title' => 'Update Website Content',
                'status' => 'pending',
                'creation_date' => now(),
                'completion_date' => null,
                'deadline' => Carbon::now()->addDays(10),
                'department_id' => 1,
                'assigned_to' => 2,
                'created_by_id' => 1,
                'completed_by_id' => null,
                'project_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimize SEO Strategy',
                'status' => 'in_progress',
                'creation_date' => now()->subDays(3),
                'completion_date' => null,
                'deadline' => Carbon::now()->addWeeks(2),
                'department_id' => 2,
                'assigned_to' => 3,
                'created_by_id' => 2,
                'completed_by_id' => null,
                'project_id' => 1,
                'created_at' => now()->subDays(3),
                'updated_at' => now(),
            ],
            [
                'title' => 'Develop Mobile App UI',
                'status' => 'pending',
                'creation_date' => now(),
                'completion_date' => null,
                'deadline' => Carbon::now()->addMonth(),
                'department_id' => 3,
                'assigned_to' => 4,
                'created_by_id' => 3,
                'completed_by_id' => null,
                'project_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Prepare Financial Report',
                'status' => 'completed',
                'creation_date' => now()->subMonth(),
                'completion_date' => now()->subWeeks(2),
                'deadline' => Carbon::now()->subWeeks(1),
                'department_id' => 4,
                'assigned_to' => 1,
                'created_by_id' => 2,
                'completed_by_id' => 1,
                'project_id' => 2,
                'created_at' => now()->subMonth(),
                'updated_at' => now()->subWeeks(2),
            ],
            [
                'title' => 'Onboard New Employees',
                'status' => 'in_progress',
                'creation_date' => now()->subDays(1),
                'completion_date' => null,
                'deadline' => Carbon::now()->addWeeks(1),
                'department_id' => 1,
                'assigned_to' => 2,
                'created_by_id' => 1,
                'completed_by_id' => null,
                'project_id' => 3,
                'created_at' => now()->subDays(1),
                'updated_at' => now(),
            ],
            [
                'title' => 'Design New Marketing Materials',
                'status' => 'pending',
                'creation_date' => now(),
                'completion_date' => null,
                'deadline' => Carbon::now()->addWeeks(3),
                'department_id' => 2,
                'assigned_to' => 3,
                'created_by_id' => 2,
                'completed_by_id' => null,
                'project_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Run User Testing for New Feature',
                'status' => 'completed',
                'creation_date' => now()->subWeeks(3),
                'completion_date' => now()->subWeeks(1),
                'deadline' => Carbon::now()->subDays(2),
                'department_id' => 3,
                'assigned_to' => 4,
                'created_by_id' => 3,
                'completed_by_id' => 4,
                'project_id' => 2,
                'created_at' => now()->subWeeks(3),
                'updated_at' => now()->subWeeks(1),
            ],
            [
                'title' => 'Plan Company Retreat',
                'status' => 'pending',
                'creation_date' => now(),
                'completion_date' => null,
                'deadline' => Carbon::now()->addMonths(2),
                'department_id' => 4,
                'assigned_to' => 1,
                'created_by_id' => 2,
                'completed_by_id' => null,
                'project_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Create Customer Survey',
                'status' => 'in_progress',
                'creation_date' => now()->subDays(2),
                'completion_date' => null,
                'deadline' => Carbon::now()->addDays(6),
                'department_id' => 1,
                'assigned_to' => 2,
                'created_by_id' => 1,
                'completed_by_id' => null,
                'project_id' => 1,
                'created_at' => now()->subDays(2),
                'updated_at' => now(),
            ],
            [
                'title' => 'Redesign Company Logo',
                'status' => 'canceled',
                'creation_date' => now()->subWeeks(2),
                'completion_date' => null,
                'deadline' => Carbon::now()->addWeeks(1),
                'department_id' => 2,
                'assigned_to' => null,
                'created_by_id' => 2,
                'completed_by_id' => null,
                'project_id' => 3,
                'created_at' => now()->subWeeks(2),
                'updated_at' => now(),
            ],
            [
                'title' => 'Prepare Budget for Q4',
                'status' => 'in_progress',
                'creation_date' => now()->subDays(5),
                'completion_date' => null,
                'deadline' => Carbon::now()->addDays(10),
                'department_id' => 3,
                'assigned_to' => 4,
                'created_by_id' => 3,
                'completed_by_id' => null,
                'project_id' => 1,
                'created_at' => now()->subDays(5),
                'updated_at' => now(),
            ]
        ]);
    }
}
