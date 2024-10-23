<x-layout>
    <x-slot:heading>
        Projects
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($projects as $project)
            <a href="/project/{{ $project['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
		    <div class="font-bold text-black-500 text-lg">{{ $project->name }}</div>
            <div class="font-bold text-blue-500 text-sm">Project ID#{{ $project->id }}</div>
            <div class="font-bold text-blue-500 text-sm">Department ID#{{ $project->department_id }}</div>
            <div class="font-bold text-red-500 text-sm">Status: {{ $project->status }}</div>
		    {{-- <div class="text-gray-500 text-sm">Created At: {{ $user['created_at'] }}</div>
       		<div class="text-gray-500 text-sm">Updated At: {{ $user['updated_at']}}</div> --}}
            </a>
        @endforeach

        <div>
            {{ $projects->links() }}
        </div>
    </div>
</x-layout>