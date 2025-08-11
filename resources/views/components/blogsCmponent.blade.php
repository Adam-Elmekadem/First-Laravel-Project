@props(['title', 'body', 'date'])

<section class="px-40 py-20 bg-gray-800 p-4">
    <h1 class="text-xl font-bold text-white">{{ $title }}</h1>
    <article class="text-white mt-2">
        {{ $body }}
    </article>
    <p class="text-cyan-500 text-sm mt-4">
        {{ $date }}
    </p>
</section>
