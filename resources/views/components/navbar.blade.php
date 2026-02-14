<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-black">
            Internships Management
        </a>

        <ul class="hidden md:flex space-x-6 text-lg">
            <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>
            <x-nav-link href="/interns" :active="request()->is('interns')">Interns</x-nav-link>
            <x-nav-link href="/projects" :active="request()->is('projects')">Projects</x-nav-link>
            <x-nav-link href="/schedules" :active="request()->is('schedules')">Schedules</x-nav-link>
        </ul>

        {{-- Responsive toggle --}}
        <div class="md:hidden">
            <button id="nav-toggle" class="text-gray-700 focus:outline-none">
                ☰
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div id="nav-menu" class="hidden md:hidden px-6 pb-4">
        <x-nav-link-mobile href="/home" :active="request()->is('home')">Home</x-nav-link-mobile>
        <x-nav-link-mobile href="/interns" :active="request()->is('interns')">Interns</x-nav-link-mobile>
        <x-nav-link-mobile href="/projects" :active="request()->is('projects')">Projects</x-nav-link-mobile>
        <x-nav-link-mobile href="/schedules" :active="request()->is('schedules')">Schedules</x-nav-link-mobile>
    </div>
</nav>
