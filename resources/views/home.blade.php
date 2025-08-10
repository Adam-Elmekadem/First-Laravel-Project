@extends('layouts.app')

@section('title', 'Home - Adam Elmekadem')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 text-center">
        <div class="max-w-4xl mx-auto px-4">
            @if(session('user_email'))
                <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                    Welcome back, {{ explode('@', session('user_email'))[0] }}!
                </h1>
            @else
                <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                    Welcome to My Laravel Journey
                </h1>
            @endif
            <p class="text-xl md:text-2xl mb-8 text-gray-300 animate-fade-in-up animation-delay-200">
                I'm so excited about building amazing web applications with Laravel framework
            </p>
            <a href="{{ route('portfolio', ['firstname' => 'Visitor']) }}" 
               class="inline-block bg-gradient-to-r from-cyan-500 to-purple-600 hover:from-cyan-600 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-500/25 animate-fade-in-up animation-delay-400">
                Explore my Github
            </a>
        </div>
    </section>

    <section class="py-16 bg-gray-800/50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                    What I'm Learning
                </h2>
                <p class="text-xl text-gray-400">
                    Modern web development with Laravel
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-gradient-to-br from-red-500/20 to-orange-600/20 backdrop-blur-sm rounded-xl p-8 text-center border border-red-500/30 transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl hover:shadow-red-500/20">
                    <div class="text-4xl mb-4 text-red-400">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-red-400">
                        Laravel Routing
                    </h3>
                    <p class="text-gray-300">
                        Mastering clean URL routing with parameters, named routes, and route groups for organized web applications.
                    </p>
                </div>
                
                <!-- Feature Card 2 -->
                <div class="bg-gradient-to-br from-green-500/20 to-emerald-600/20 backdrop-blur-sm rounded-xl p-8 text-center border border-green-500/30 transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl hover:shadow-green-500/20">
                    <div class="text-4xl mb-4 text-green-400">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-400">
                        Form Validation
                    </h3>
                    <p class="text-gray-300">
                        Implementing robust server-side validation with Laravel's built-in validation rules and custom error handling.
                    </p>
                </div>
                
                <!-- Feature Card 3 -->
                <div class="bg-gradient-to-br from-purple-500/20 to-pink-600/20 backdrop-blur-sm rounded-xl p-8 text-center border border-purple-500/30 transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl hover:shadow-purple-500/20">
                    <div class="text-4xl mb-4 text-purple-400">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-purple-400">
                        Blade Templating
                    </h3>
                    <p class="text-gray-300">
                        Creating dynamic, reusable views with Blade's powerful templating engine and component system.
                    </p>
                </div>
                
                <!-- Feature Card 4 -->
                <div class="bg-gradient-to-br from-blue-500/20 to-cyan-600/20 backdrop-blur-sm rounded-xl p-8 text-center border border-blue-500/30 transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl hover:shadow-blue-500/20">
                    <div class="text-4xl mb-4 text-blue-400">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-blue-400">
                        Security Features
                    </h3>
                    <p class="text-gray-300">
                        Learning CSRF protection, input sanitization, and Laravel's built-in security best practices.
                    </p>
                </div>
                
                <!-- Feature Card 5 -->
                <div class="bg-gradient-to-br from-yellow-500/20 to-orange-600/20 backdrop-blur-sm rounded-xl p-8 text-center border border-yellow-500/30 transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl hover:shadow-yellow-500/20">
                    <div class="text-4xl mb-4 text-yellow-400">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-yellow-400">
                        MVC Architecture
                    </h3>
                    <p class="text-gray-300">
                        Understanding Model-View-Controller pattern and separation of concerns in web applications.
                    </p>
                </div>
                
                <!-- Feature Card 6 -->
                <div class="bg-gradient-to-br from-indigo-500/20 to-purple-600/20 backdrop-blur-sm rounded-xl p-8 text-center border border-indigo-500/30 transform hover:-translate-y-2 transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-500/20">
                    <div class="text-4xl mb-4 text-indigo-400">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-indigo-400">
                        Modern Development
                    </h3>
                    <p class="text-gray-300">
                        Using Laravel 12 with PHP 8.2, Vite asset compilation, and modern development workflows.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
