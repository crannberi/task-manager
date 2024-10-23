<x-layout>
    <x-slot:heading>
        Tasks
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($tasks as $task)
            <a href="/task/{{ $task['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
		        <div class="font-bold text-blue-500 text-lg">{{ $task->title }}</div>
                <div class="font-bold text-sm">Task ID#{{ $task->id }}</div>
                <div class="font-bold text-sm">Department ID#{{ $task->department_id }}</div>
                <div class="font-bold text-sm">Assigned to: {{ $task->assigned_to }}</div>
                <div class="font-bold text-red-500 text-sm">{{ $task->status }}</div>
		        {{-- <div class="text-gray-500 text-sm">Created At: {{ $task['created_at'] }}</div>
       	        <div class="text-gray-500 text-sm">Updated At: {{ $task['updated_at']}}</div> --}}
            </a>
        @endforeach

        <div>
            {{ $tasks->links() }}
        </div>
    </div>
</x-layout>