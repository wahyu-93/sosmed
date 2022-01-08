@foreach ($following as $user)
    <x-card>
        <div class="flex mt-3 items-center">
            <div class="flex-shrink-0 mr-3">
                <img class="w-10 h-10 rounded-full" src="{{ $user->gravatar() }}" alt="">
            </div>
    
            <div>
                <div class="font-semibold">
                {{ $user->name }}
                </div>
    
                @if($user->pivot)
                    <div class="text-gray-500 text-sm">
                    {{ $user->pivot->created_at->diffForHumans() }}
                    </div>
                @endif
            </div>
        </div>    
    </x-card>
@endforeach