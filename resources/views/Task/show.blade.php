<x-layout>
    <x-slot:heading>
        Tasks
    </x-slot:heading>

    <h2 class="font-bold text-black-500 text-lg"> {{ $task->name }}</h2>

    
    <div>
    <p class="space-y4">
    <div> Task ID#{{ $Task->id }} </div> 
	<div> Department ID# {{ $task->department_id }}
	<div> Project ID# {{ $task->project_id }}
	<div> Assigned To: {{ $task->assigned_to }}
	<div> Created By: {{ $task->created_by }}
	<div> Completed By: {{ $task->completed_by }}
    <div class="font-bold text-red-500 text-sm">Status: {{ $task->status }}</div>
	<div class="font-bold text-red-500 text-sm">Deadline: {{ $task->status }}</div>
    <div class="text-gray-500 text-sm">Created At: {{ $task['created_at'] }}</div>
    <div class="text-gray-500 text-sm">Updated At: {{ $task['updated_at']}}</div>
    </p>
    </div>
</x-layout>