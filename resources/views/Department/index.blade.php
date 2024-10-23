<x-layout>
    <x-slot:heading>
        Departments
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($departments as $department)
            <a href="/department/{{ $department['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">ID#{{ $department->id }}</div>
                <div class="font-bold text-sm">{{ $department->name }}</div>
                <div>{{ $department['description'] }}</div>
            </a>
        @endforeach

        <div>
            {{ $departments->links() }}
        </div>
    </div>
</x-layout>