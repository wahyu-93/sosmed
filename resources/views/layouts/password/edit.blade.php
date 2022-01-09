<x-app-layout>
    @slot('header')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Change Your Password
        </h2>
    @endslot

    <x-container>
        <div class="w-full lg:w-1/2 bg-gray-100 border-2 p-5 rounded-xl">            
            <form action="{{ route('password.edit') }}" method="POST">
                @method('PUT')
                @csrf
                
                <div class="mt-2">
                    <x-label for="current_password" class="text-xl">Current Password</x-label>
                    <x-input class="w-full" type="password" name="current_password" id="current_password"></x-input>
                </div>
                @error('current_password')
                    <div class="text-rose-500 font-semibold">{{ $message }}</div>
                @enderror
    
                <div class="mt-2">
                    <x-label for="password" class="text-xl">Password</x-label>
                    <x-input class="w-full" type="password" name="password" id="password"></x-input>
                </div>
                @error('password')
                    <div class="text-rose-500 font-semibold">{{ $message }}</div>
                @enderror
    
                <div class="mt-2">
                    <x-label for="password_confirmation" class="text-xl">Password Confirmation</x-label>
                    <x-input class="w-full" type="password" name="password_confirmation" id="password_confirmation"></x-input>
                </div>
                @error('password_confirmation')
                    <div class="text-rose-500 font-semibold">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <x-button>Update</x-button>
                </div>

            </form>
        </div>
    </x-container>

</x-app-layout> 