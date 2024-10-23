<x-layout>
    <x-slot:heading>
        Departments
    </x-slot:heading>

    <h2 class="font-bold text-blue-500 text-lg"> {{ $department->name }}</h2>

    
    <div>
    <p class="space-y4">
        <div> ID#{{ $department->id }} </div> 
        <div> {{ $department['description'] }} </div>  
        <div class="text-gray-500 text-sm">Created At: {{ $department['created_at'] }}</div>
        <div class="text-gray-500 text-sm">Updated At: {{ $department['updated_at']}}</div>
    </p>
    </div>

    {{-- <a href="/department/{{ $department['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
        <div class="font-bold text-blue-500 text-sm">ID#{{ $department->id }}</div>
        <div class="font-bold text-sm">{{ $department->name }}</div>
        <div>{{ $department['description'] }}</div>
    </a> --}}
    
    {{-- @can('edit', $department)
        <p class="mt-6">
           <x-button href="/department/{{ $deoartment->id }}/edit">Edit Department</x-button>
        </p>
    @endcan --}}
</x-layout>