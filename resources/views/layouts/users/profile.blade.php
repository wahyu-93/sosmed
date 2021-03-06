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
            <div class="grid grid-cols-2 gap-10">
                <div class="grid row-span-2">
                    @if ($user->statuses->count())
                        @foreach ($user->statuses as $status)
                            <x-card>
                                <div class="space-y-5">
                                    <div class="flex mt-3 items-center">
                                        <div class="flex-shrink-0s mr-3">
                                            <img class="w-10 h-10 rounded-full" src="{{ $user->gravatar() }}" alt="">
                                        </div>
            
                                        <div>
                                            <div class="font-semibold">
                                                {{ $user->name }}
                                            </div>
                                            
                                            <div>
                                                {{ $status->body }}
                                            </div>

                                            <div class="text-gray-500 text-sm">
                                                {{ $status->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </x-card>    
                        @endforeach
                    @endif
                </div>   
            </div>         
        </x-container>
    </div>
</x-app-layout>
