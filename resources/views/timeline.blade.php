<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-8">
                <div class="border rounded-xl p-5 space-y-5">
                    @foreach ($statuses as $status)
                        <div class="flex">
                            <div class="flex-shrink-0s mr-3">
                                <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150" alt="">
                            </div>
    
                            <div>
                                <div class="font-semibold">
                                    {{ ucwords($status->user->name) }}
                                </div>
    
                                <div>
                                    {{ $status->body}}
                                </div>
    
                                <div class="text-gray-500 text-sm">
                                    {{-- {{ $status->created_at->format('d M, y') }} --}}
                                    {{ $status->created_at->diffforhumans() }}
                                </div>
                            </div>
                        </div>    
                    @endforeach
                </div>
            </div>
            <div class="col-span-4">
                <div class="border rounded-xl p-5">
                    <h1 class="font-semibold">Recently Follow</h1>
                    <div class="space-y-5">
                        @foreach ($following as $user)
                            <div class="flex mt-3 items-center">
                                <div class="flex-shrink-0s mr-3">
                                    <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150" alt="">
                                </div>

                                <div>
                                    <div class="font-semibold">
                                    {{ $user->name }}
                                    </div>

                                    <div class="text-gray-500 text-sm">
                                    {{ $user->pivot->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</x-app-layout>
