<x-layout>
    <x-slot:heading>
        Users
    </x-slot:heading>

    <h2 class="font-bold text-blue-500 text-lg"> {{ $user->first_name }} {{ $user->last_name }}</h2>

    
    <div>
    <p class="space-y4">
        <div> UID#{{ $user->id }} </div> 
	    <div> Department ID# {{ $user->department_id }}
	    <div>Role: {{ $user['role'] }} </div> 
	    <div>Email: {{ $user['email'] }} </div>
        <div class="text-gray-500 text-sm">Created At: {{ $user['created_at'] }}</div>
        <div class="text-gray-500 text-sm">Updated At: {{ $user['updated_at']}}</div>
    </p>
    </div>
</x-layout>