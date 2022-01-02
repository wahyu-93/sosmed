<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-8">
                <x-card>
                    <form action="{{ route('status.store') }}" method="post">
                        @csrf
                        <div class="flex">
                            <div class="mr-3">
                                <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="">
                            </div>
    
                            <div class="w-full">
                                <div class="font-semibold mb-2">
                                    {{ ucwords(Auth::user()->name) }}
                                </div>
    
                                <div>
                                    <textarea 
                                        name="body" 
                                        id="body"
                                        class="rounded-xl w-full bg-gray-100 form-textarea resize-none border-gray-300 focus:border-blue-500"></textarea>
    
                                    <div class="text-right">
                                        <x-button class="bg-blue-600">Post</x-button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </form>
                </x-card>

                @foreach ($statuses as $status)
                    <div class="border rounded-xl p-5 my-3">
                        <div class="flex">
                            <div class="flex-shrink-0s mr-3">
                                <img class="w-10 h-10 rounded-full" src="{{ $status->user->gravatar() }}" alt="">
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
                    </div>
                @endforeach
            </div>
            <div class="col-span-4">
                <x-card>
                    <h1 class="font-semibold">Recently Follow</h1>
                    <div class="space-y-5">
                        @foreach ($following as $user)
                            <div class="flex mt-3 items-center">
                                <div class="flex-shrink-0s mr-3">
                                    <img class="w-10 h-10 rounded-full" src="{{ $user->gravatar() }}" alt="">
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
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>
