<aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r border-gray-200 hidden md:flex shrink-0">
    <div class="flex items-center justify-center mb-6">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-12 w-auto fill-current text-gray-800" />
        </a>
    </div>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="space-y-2">
            <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span class="mx-2 font-medium">{{ __('Sales') }}</span>
            </x-sidebar-link>

            <x-sidebar-link href="#" :active="false">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                <span class="mx-2 font-medium">{{ __('Orders') }}</span>
            </x-sidebar-link>

            <x-sidebar-link :href="route('inventory.index')" :active="request()->routeIs('inventory.*')">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                <span class="mx-2 font-medium">{{ __('Inventory') }}</span>
            </x-sidebar-link>

            <x-sidebar-link :href="route('users.index')" :active="request()->routeIs('users.*')">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <span class="mx-2 font-medium">{{ __('Users') }}</span>
            </x-sidebar-link>
        </nav>
    </div>
</aside>
