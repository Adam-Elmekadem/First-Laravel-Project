@extends('layouts.app')

@section('title', 'Edit Blog')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-indigo-600">Edit Blog</h1>
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" class="mt-8">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-300">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" class=" p-2 mt-1 block w-full border border-gray-600 bg-gray-800 text-gray-300 rounded-lg shadow-sm focus:border-cyan-500 focus:ring focus:ring-cyan-500 focus:ring-opacity-50" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
            <textarea name="description" id="description" rows="4" class=" p-2 mt-1 block w-full border border-gray-600 bg-gray-800 text-gray-300 rounded-lg shadow-sm focus:border-cyan-500 focus:ring focus:ring-cyan-500 focus:ring-opacity-50" required>{{ old('description', $blog->description) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="topic" class="block text-sm font-medium text-gray-300">Topic</label>
            <input type="text" name="topic" id="topic" value="{{ old('topic', $blog->topic) }}" class=" p-2 mt-1 block w-full border border-gray-600 bg-gray-800 text-gray-300 rounded-lg shadow-sm focus:border-cyan-500 focus:ring focus:ring-cyan-500 focus:ring-opacity-50" required>
        </div>
        <div class="mb-4">
            <label for="body" class="block text-sm font-medium text-gray-300">Body</label>
            <textarea name="body" id="body" rows="6" class="p-2 mt-1 block w-full border border-gray-600 bg-gray-800 text-gray-300 rounded-lg shadow-sm focus:border-cyan-500 focus:ring focus:ring-cyan-500 focus:ring-opacity-50" required>{{ old('body', $blog->body) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="color" class="block text-sm font-medium text-gray-300">Color</label>
            <select name="color" id="color" class="p-2 mt-1 block w-full border border-gray-600 bg-gray-800 text-gray-300 rounded-lg shadow-sm focus:border-cyan-500 focus:ring focus:ring-cyan-500 focus:ring-opacity-50">
                <option value="cyan" {{ $blog->color === 'cyan' ? 'selected' : '' }}>Cyan</option>
                <option value="purple" {{ $blog->color === 'purple' ? 'selected' : '' }}>Purple</option>
                <option value="green" {{ $blog->color === 'green' ? 'selected' : '' }}>Green</option>
                <option value="yellow" {{ $blog->color === 'yellow' ? 'selected' : '' }}>Yellow</option>
            </select>
        </div>
        <div class="mt-8">
            <button type="submit" class="inline-block bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-6 rounded-lg transition-all duration-300">Update Blog</button>
        </div>
    </form>
</div>
@endsection