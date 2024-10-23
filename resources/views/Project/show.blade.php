<x-layout>
    <x-slot:heading>
        Projects
    </x-slot:heading>

    <h2 class="font-bold text-black-500 text-lg"> {{ $project->name }}</h2>

    
    <div>
    <p class="space-y4">
        <div> Project ID#{{ $project->id }} </div> 
	    <div> Department ID# {{ $project->department_id }}

        <div class="font-bold text-red-500 text-sm">Status: {{ $project->status }}</div>
	    <div class="font-bold text-red-500 text-sm">Deadline: {{ $project->status }}</div>
        <div class="text-gray-500 text-sm">Created At: {{ $project['created_at'] }}</div>
        <div class="text-gray-500 text-sm">Updated At: {{ $project['updated_at']}}</div>
    </p>
    </div>
</x-layout>