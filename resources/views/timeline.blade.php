<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-8">
                <div class="space-y-5">
                    @foreach ($statuses as $status)
                        <div class="flex">
                            <div class="flex-shrink-0s mr-3">
                                <img class="w-10 h-10 rounded-full mr-3" src="https://i.pravatar.cc/150" alt="">
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
                friend
            </div>
        </div>
    </x-container>
</x-app-layout>