<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('task_id'); // PK
            $table->string('title');
            $table->enum('status', ['pending', 'in_progress', 'completed', 'canceled'])->default('pending');
            $table->timestamp('creation_date')->useCurrent();
            $table->timestamp('completion_date')->nullable();
            $table->timestamp('deadline')->nullable(); 
            //FK
            $table->foreignId('department_id')->constrained();
            $table->foreignId('assigned_to')->nullable()->constrained('users');
            $table->foreignId('created_by_id')->nullable()->constrained('users');
            $table->foreignId('completed_by_id')->nullable()->constrained('users');
            $table->foreignId('project_id')->constrained('projects');

            $table->timestamps();
        });

    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
