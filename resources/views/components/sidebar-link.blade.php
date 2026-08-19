@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-4 py-3 mt-2 text-indigo-600 bg-indigo-50 rounded-lg'
            : 'flex items-center px-4 py-3 mt-2 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
