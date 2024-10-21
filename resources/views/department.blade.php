<x-layout>
    <x-slot:heading>
        Departments
    </x-slot:heading>
    
    
    @foreach ($departments as $department)
        <p>{{ $department->name }}</p>
    @endforeach
    
    {{-- {{ $departments->links() }} --}}

    {{-- <h1>Test from the Departments Page</h1> --}}
</x-layout>