<x-app-layout>
    <x-container>
        <div class="grid grid-cols-4 gap-3">
            <x-following :following="$users"></x-following>
        </div>

        {{ $users->links() }}
    </x-container>
</x-app-layout>