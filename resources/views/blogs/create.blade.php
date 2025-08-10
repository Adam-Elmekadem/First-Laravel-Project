@extends('layouts.app')

@section('title', 'Create Blog')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-4">
    <div class="text-center mb-8">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent animate-fade-in-up">
            Create New Blog
        </h1>
        <p class="text-lg text-gray-400 max-w-xl mx-auto">
            Share your knowledge, tips, or news with the community.
        </p>
    </div>
    <form action="{{ route('blogs.store') }}" method="POST" class="bg-gray-800/80 rounded-xl shadow-lg p-8 space-y-6 border border-cyan-500/20">
        @csrf

        @if($errors->any())
            <div class="bg-red-500/20 text-red-500 p-4 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="title" class="block text-gray-300 font-semibold mb-2">Title</label>
            <input 
                type="text" 
                id="title" 
                name="title" 
                value="{{ old('title') }}"
                class="w-full px-4 py-2 rounded-lg bg-gray-900 text-gray-100 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-200 outline-none transition-all" required
            >
        </div>
        <div>
            <label for="body" class="block text-gray-300 font-semibold mb-2">Body</label>
            <textarea id="body" name="body" rows="5" class="w-full px-4 py-2 rounded-lg bg-gray-900 text-gray-100 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-200 outline-none transition-all" required></textarea>
        </div>
        <div>
            <label for="description" class="block text-gray-300 font-semibold mb-2">Description</label>
            <textarea id="description" name="description" rows="2" class="w-full px-4 py-2 rounded-lg bg-gray-900 text-gray-100 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-200 outline-none transition-all" required></textarea>
        </div>
        <div>
            <label for="topic" class="block text-gray-300 font-semibold mb-2">Topic</label>
            <input type="text" id="topic" name="topic" class="w-full px-4 py-2 rounded-lg bg-gray-900 text-gray-100 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-200 outline-none transition-all" required>
        </div>
        <div>
            <label for="color" class="block text-gray-300 font-semibold mb-2">Color</label>
            <input type="text" id="color" name="color" value="cyan" class="w-full px-4 py-2 rounded-lg bg-gray-900 text-gray-100 border border-gray-700 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-200 outline-none transition-all" required>
            <p class="text-xs text-gray-500 mt-1">Options: cyan, purple, green, yellow</p>
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-purple-600 hover:from-cyan-600 hover:to-purple-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-500/25 animate-fade-in-up">
            Create Blog
        </button>
    </form>
</div>
@endsection