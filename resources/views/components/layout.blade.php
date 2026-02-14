<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title></title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

{{-- Navbar --}}
<x-navbar></x-navbar>

{{-- Header Hero --}}
<x-header>
    Welcome to Home
    <x-slot name="description">This Is Home Page</x-slot>
</x-header>

{{-- Main Content --}}
<main id="main-content" class="max-w-7xl mx-auto px-6 py-12 space-y-12">
    {{ $slot }}
</main>


{{-- Footer --}}
<x-footer></x-footer>

<script>
    // Simple navbar toggle
    document.getElementById('nav-toggle').addEventListener('click', () => {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
