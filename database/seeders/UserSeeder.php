<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), 
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 1, 
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane.smith@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'user',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 2, 
            ],
            [
                'first_name' => 'Alice',
                'last_name' => 'Johnson',
                'email' => 'alice.johnson@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'manager',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 1, 
            ],
            [
                'first_name' => 'Bob',
                'last_name' => 'Williams',
                'email' => 'bob.williams@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'user',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'department_id' => 3, 
            ],
        ]);
    }
}
