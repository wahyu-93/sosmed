<x-container>
    <div class="flex">
        <a href="{{ route('profile', $user->username) }}" class="py-3 px-7 border-r-2 border-gray-300 border-l-2 border-gray-300">
            <h3 class="text-xl font-semibold text-center">{{ $user->statuses->count() }}</h3>
            <h1 class="uppercase text-gray-400 text-center text-sm">Status</h1>
        </a href="">

        <a href="{{ route('profile.follow', [$user->username, 'following']) }}" class="py-3 px-7 border-r-2 border-gray-300">
            <h3 class="text-xl font-semibold text-center">{{ $user->follows->count() }}</h3>
            <h1 class="uppercase text-gray-400 text-center text-sm">Following</h1>
        </a href="">

        <a href="{{ route('profile.follow', [$user->username, 'followers']) }}" class="py-3 px-7 border-r-2 border-gray-300">
            <h3 class="text-xl font-semibold text-center">{{ $user->followers->count() }}</h3>
            <h1 class="uppercase text-gray-400 text-center text-sm">Follower</h1>
        </a href="">
    </div>
</x-container>