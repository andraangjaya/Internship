@props(['active'=> false])

<a {{ $attributes }} class="{{ $active ? 'font-bold text-red-600' : '' }} block py-2 border-b hover:text-red-600">{{ $slot }}</a>
