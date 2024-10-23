<x-layout>
    <x-slot:heading>
        Users
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($users as $user)
            <a href="/user/{{ $user['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">UID#{{ $user->id }}</div>
                <div class="font-bold text-blue-500 text-sm">Department ID#{{ $user->department_id }}</div>
                <div class="font-bold text-sm">{{ $user->first_name }} {{ $user->last_name }}</div>
                <div>{{ $user['role'] }}</div>
            </a>
        @endforeach

        <div>
            {{ $users->links() }}
        </div>
    </div>
</x-layout>