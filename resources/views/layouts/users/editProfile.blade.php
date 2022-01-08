<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Your Profile
        </h2>
    </x-slot>
    
    <x-container>
        <div class="w-full lg:w-1/2 bg-gray-100 border-2 p-5 rounded-xl">            
            <form action="{{ route('profile.update') }}" method="POST">
                @method('PUT')
                @csrf
                
                <div class="mt-2">
                    <x-label for="username" class="text-xl">Username</x-label>
                    <x-input value="{{ auth()->user()->username}}" class="w-full" type="text" name="username" id="username"></x-input>
                </div>
                @error('username')
                    <div class="text-rose-500 font-semibold">{{ $message }}</div>
                @enderror
    
                <div class="mt-2">
                    <x-label for="email" class="text-xl">Email</x-label>
                    <x-input value="{{ auth()->user()->email}}" class="w-full" type="email" name="email" id="email"></x-input>
                </div>
                @error('email')
                    <div class="text-rose-500 font-semibold">{{ $message }}</div>
                @enderror
    
                <div class="mt-2">
                    <x-label for="name" class="text-xl">Nama</x-label>
                    <x-input value="{{ auth()->user()->name}}" class="w-full" type="text" name="name" id="name"></x-input>
                </div>
                @error('name')
                    <div class="text-rose-500 font-semibold">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <x-button>Update</x-button>
                </div>

            </form>
        </div>
    </x-container>
</x-app-layout>