@extends('layouts.app')

@section('title', $blog->title)

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4">
    <div class="mb-8">
        <a href="{{ route('blogs.index') }}" class="text-cyan-400 hover:text-cyan-200 font-semibold">&larr; Back to Blogs</a>
    </div>
    <div class="bg-gray-800/80 rounded-xl shadow-lg p-8 border border-cyan-500/20">
        <div class="flex items-center mb-4">
            <span class="inline-block bg-cyan-500/20 text-cyan-400 px-3 py-1 rounded-full text-xs font-semibold mr-2">{{ $blog->topic }}</span>
            <span class="text-gray-500 text-xs">{{ $blog->created_at->format('F Y') }}</span>
        </div>
        <h1 class="text-3xl font-bold text-cyan-300 mb-4">{{ $blog->title }}</h1>
        <p class="text-gray-300 mb-6">{{ $blog->description }}</p>
        <div class="prose prose-invert max-w-none text-gray-200">
            {!! nl2br(e($blog->body)) !!}
        </div>
    </div>
</div>
@endsection
