<x-layout>
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
</x-layout>
