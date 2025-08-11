@props(['id', 'title', 'description', 'topic', 'date', 'color' => 'cyan'])
@php
    $color = (string) $color;
    $colorMap = [
        'cyan' => [
            'border' => 'border-cyan-500/20',
            'bg' => 'bg-cyan-500/20',
            'text' => 'text-cyan-400',
            'heading' => 'text-cyan-300',
            'link' => 'text-cyan-400 hover:text-cyan-200',
        ],
        'purple' => [
            'border' => 'border-purple-500/20',
            'bg' => 'bg-purple-500/20',
            'text' => 'text-purple-400',
            'heading' => 'text-purple-300',
            'link' => 'text-purple-400 hover:text-purple-200',
        ],
        'green' => [
            'border' => 'border-green-500/20',
            'bg' => 'bg-green-500/20',
            'text' => 'text-green-400',
            'heading' => 'text-green-300',
            'link' => 'text-green-400 hover:text-green-200',
        ],
        'yellow' => [
            'border' => 'border-yellow-500/20',
            'bg' => 'bg-yellow-500/20',
            'text' => 'text-yellow-400',
            'heading' => 'text-yellow-300',
            'link' => 'text-yellow-400 hover:text-yellow-200',
        ],
    ];
    $c = array_key_exists($color, $colorMap) ? $colorMap[$color] : $colorMap['cyan'];
@endphp
<div class="bg-gray-800/80 rounded-xl shadow-lg p-6 flex flex-col hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl border {{ $c['border'] }}">
    <div class="flex items-center mb-4">
        <span class="inline-block {{ $c['bg'] }} {{ $c['text'] }} px-3 py-1 rounded-full text-xs font-semibold mr-2">{{ $topic }}</span>
        <span class="text-gray-500 text-xs">{{ $date }}</span>
    </div>
    <h2 class="text-2xl font-bold {{ $c['heading'] }} mb-2">{{ $title }}</h2>
    <p class="text-gray-300 mb-4">{{ $description }}</p>
    <div class="flex justify-between">
        <a href="{{ route('blogs.show', $id) }}" class="{{ $c['link'] }} font-semibold inline-flex items-center">Read More <i class="fas fa-arrow-right ml-2"></i></a>
        <div>
            <a href="{{ route('blogs.edit', $id) }}" class="text-blue-500 bg-blue-950 px-4 py-1 rounded-lg hover:text-blue-400 ml-2">Edit</a>
            <form action="{{ route('blogs.destroy', $id) }}" method="POST" class="inline-flex">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 bg-red-950 px-4 py-1 rounded-lg hover:text-red-400">Delete</button>
            </form>
        </div>
    </div>
</div>
