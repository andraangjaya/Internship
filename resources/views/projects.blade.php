<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

{{-- Navbar --}}
<x-navbar></x-navbar>

{{-- Header Hero --}}
<header class="bg-cover bg-center h-96 text-white" style="background-image: url('https://images.unsplash.com/photo-1581090460690-3db5398f9b9b?auto=format&fit=crop&w=1350');">
    <div class="bg-black bg-opacity-40 h-full flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-2">Welcome to MyBrand</h1>
        <p class="text-xl md:text-2xl mb-6">Enjoy the best products & offers</p>

        <a href="#main-content" class="bg-red-500 hover:bg-red-600 px-6 py-3 text-lg rounded-lg transition">
            Explore Now
        </a>
    </div>
</header>

{{-- Main Content --}}
<main id="main-content" class="max-w-7xl mx-auto px-6 py-12 space-y-12">

    {{-- Feature Section --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h3 class="text-2xl font-semibold mb-2">Latest Products</h3>
            <p class="text-gray-600">Check out our newest arrivals</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h3 class="text-2xl font-semibold mb-2">Exclusive Offers</h3>
            <p class="text-gray-600">Great deals just for you</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h3 class="text-2xl font-semibold mb-2">Join & Save</h3>
            <p class="text-gray-600">Become a member & enjoy benefits</p>
        </div>
    </section>

    {{-- Newsletter CTA --}}
    <section class="bg-red-500 text-white rounded-lg py-10 text-center">
        <h2 class="text-3xl font-bold mb-4">Stay Updated!</h2>
        <p class="text-lg mb-6">Subscribe to receive the latest updates and offers.</p>
        <form class="max-w-md mx-auto flex gap-2">
            <input type="email" placeholder="Your email" class="flex-grow px-4 py-2 rounded-lg text-gray-800 focus:outline-none">
            <button type="submit" class="bg-white text-red-500 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                Subscribe
            </button>
        </form>
    </section>

</main>

{{-- Footer --}}
<footer class="bg-white border-t mt-12">
    <div class="max-w-7xl mx-auto px-6 py-6 text-center text-sm text-gray-600">
        &copy; {{ date('Y') }} MyBrand. All rights reserved.
    </div>
</footer>

<script>
    // Simple navbar toggle
    document.getElementById('nav-toggle').addEventListener('click', () => {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
