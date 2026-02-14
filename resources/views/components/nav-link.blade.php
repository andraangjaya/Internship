@props(['active'=> false])

<li><a {{ $attributes }} class="{{ $active ? 'font-bold text-red-600' : '' }} hover:text-red-600 transition">{{ $slot }}</a></li>
