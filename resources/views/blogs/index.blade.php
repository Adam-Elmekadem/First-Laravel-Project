@extends('layouts.app')

@section('title', 'Blogs')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4">
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent animate-fade-in-up">
            Latest Blog Articles
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            Stay up to date with the latest news, tutorials, and insights from the Laravel and web development world.
        </p>
    </div>
    <div class="mb-8 text-right">
        <a href="{{ route('blogs.create') }}" class="inline-block bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-6 rounded-lg transition-all duration-300">Create New Blog</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @forelse($Allblogs as $blog)
            <x-blog-card
                title="{{ $blog->title }}"
                description="{{ $blog->description }}"
                topic="{{ $blog->topic }}"
                date="{{ $blog->created_at->format('F Y') }}"
                color="{{ $blog->color ?? 'cyan' }}"
                id="{{ $blog->id }}"
            />
        @empty
            <div class="col-span-2 text-center text-gray-400 py-12">No blogs found.</div>
        @endforelse
    </div>
    <div class="mt-12 text-center">
        <a href="#" class="inline-block bg-gradient-to-r from-cyan-500 to-purple-600 hover:from-cyan-600 hover:to-purple-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-500/25 animate-fade-in-up">
            View All Articles
        </a>
    </div>
</div>
@endsection