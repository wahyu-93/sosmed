<x-app-layout>
    <div class="py-10 border-b-2 border-gray-300 -mt-8">
        <x-container class="py-8">
            <div class="flex items-center">
                <div class="flex-shrink-0 mr-3">
                    <img src="{{ $user->gravatar() }}" class="w-16 h-16 rounded-full border-2 border-blue-500 p-1" alt="{{$user->username }}">
                </div>
                <div>
                    <h1>{{ $user->name }}</h1>
                    <p>Joined {{ $user->created_at->diffForhumans() }}</p>
                </div>
            </div>
        </x-container>
    </div>

    <div class="border-b-2 border-gray-300">
        <x-statistik :user="$user"/>
    </div>

    <div class="mt-5">
        <x-container>
            <div class="grid grid-cols-3 gap-5">                
                <x-following :following="$follow"></x-following>
            </div>
        </x-container>
    </div>
</x-app-layout>
