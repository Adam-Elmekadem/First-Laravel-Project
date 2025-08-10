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
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <x-blog-card
            title="Mastering Laravel Blade Components"
            description="Discover how to create reusable, maintainable UI with Blade components and slots. Learn best practices for structuring your Laravel views for maximum productivity."
            topic="Laravel"
            date="August 2025"
            color="cyan"
        />
        <x-blog-card
            title="PHP 8.2: New Features & Tips"
            description="Explore the latest features in PHP 8.2, including readonly classes, new types, and performance improvements. Upgrade your codebase with confidence!"
            topic="PHP"
            date="July 2025"
            color="purple"
        />
        <x-blog-card
            title="Building Responsive Layouts with Tailwind CSS"
            description="A practical guide to creating beautiful, responsive layouts using Tailwind CSS utility classes. Tips for grids, flexbox, and mobile-first design."
            topic="Web Dev"
            date="June 2025"
            color="green"
        />
        <x-blog-card
            title="10 Productivity Hacks for Developers"
            description="Boost your workflow with these proven productivity tips for web developers. From keyboard shortcuts to time management, get more done every day."
            topic="Tips"
            date="May 2025"
            color="yellow"
        />
    </div>
    <div class="mt-12 text-center">
        <a href="#" class="inline-block bg-gradient-to-r from-cyan-500 to-purple-600 hover:from-cyan-600 hover:to-purple-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-500/25 animate-fade-in-up">
            View All Articles
        </a>
    </div>
</div>
@endsection