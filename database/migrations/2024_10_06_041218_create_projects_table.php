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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['pending', 'in_progress', 'completed', 'canceled'])->default('pending');
            // $table->unsignedBigInteger('department_id');
            // $table->foreignIdFor(App\Models\Department::class);
            $table->timestamp('creation_date')->useCurrent();

            $table->timestamps();
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('department_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
